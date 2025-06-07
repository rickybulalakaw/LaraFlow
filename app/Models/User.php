<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Traits\AdditionalUuid;
use App\Models\core\SystemRole;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Spatie\Activitylog\LogOptions;

use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
// class User extends AuthUser
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use AdditionalUuid;
    use LogsActivity;


    // use BelongsToOffice;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'middle_name',
        'last_name',
        'extension',
        'email',
        'password',
        'is_member',
        'profile_photo_path',
        'employee_number',
        // 'uuid',
        'sex',
        'dob',
        'gsis',
        'sss',
        'philhealth',
        'umid',
        'work_experiences',
        'eligibilities',
        'trainings',
        'voluntary_works',
        'certifications',
        'declarations',
        'is_employee',
        'biometric_no',
        'spouse_last_name',
        'spouse_first_name',
        'spouse_middle_name',
        'spouse_extension_name',
        'spouse_occupation',
        'spouse_business_address',
        'spouse_telephone_number',
        'children',
        'father_last_name',
        'father_first_name',
        'father_middle_name',
        'father_extension_name',
        'mother_last_name',
        'mother_first_name',
        'mother_maiden_name',
        'mother_middle_name',
        'mother_extension_name',
        'education',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly([
                'name',
                'middle_name',
                'last_name',
                'extension',
                'email',
                'is_member',
                'profile_photo_path',
                'employee_number',
                'sex',
                'dob',
                'work_experiences',
                'eligibilities',
                'trainings',
                'voluntary_works',
                'certifications',
                'declarations',
                'is_employee',
            ]);
        // Chain fluent methods for configuration options
    }


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
        'philhealth'
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'gsis' => 'encrypted',
            'sss' => 'encrypted',
            'philhealth' => 'encrypted',
            'umid' => 'encrypted',
            'work_experiences' => 'array',
            'eligibilities' => 'array',
            'trainings' => 'array',
            'voluntary_works' => 'array',
            'certifications' => 'array',
            'declarations' => 'array',
            'education' => 'array',
            'children' => 'encrypted:array',
            'dob' => 'date:Y-m-d',
            'is_employee' => 'boolean',
            'spouse_last_name' => 'encrypted',
            'spouse_first_name' => 'encrypted',
            'spouse_middle_name' => 'encrypted',
            'spouse_extension_name' => 'encrypted',
            'spouse_occupation' => 'encrypted',
            'spouse_business_address' => 'encrypted',
            'spouse_telephone_number' => 'encrypted',
            'father_last_name' => 'encrypted',
            'father_first_name' => 'encrypted',
            'father_middle_name' => 'encrypted',
            'father_extension_name' => 'encrypted',
            'mother_last_name' => 'encrypted',
            'mother_first_name' => 'encrypted',
            'mother_maiden_name' => 'encrypted',
            'mother_middle_name' => 'encrypted',
            'mother_extension_name' => 'encrypted',
        ];

        // If any of the array here triggers error during updating, change the array into AsArrayObject::class casting 
    }



    public function appointment()
    {
        return $this->hasOne(Appointment::class)->where('is_active', true);
    }

    public function position()
    {
        $position = DB::table('users')
            ->join('appointments', 'users.id', '=', 'appointments.user_id')
            ->join('plantillas', 'appointments.plantilla_id', '=', 'plantillas.id')
            ->join('offices', 'plantillas.office_id', '=', 'offices.id')
            ->join('positions', 'plantillas.position_id', '=', 'positions.id')
            // ->select('offices.name as office_name', 'offices.acronym as office_acronym')
            ->select(
                'positions.name as position_name',
                'positions.letter_acronym as position_letter_acronym',
                'positions.salary_grade as salary_grade',
                'offices.name as office_name',
                'offices.id as office_id',
                'offices.acronym as office_acronym'
            )
            ->where('users.id', $this->id)
            ->first();

        return $position;


        // return $this->hasOneThrough(Position::class, Appointment::class);
    }

    public function system_role()
    {
        return $this->hasMany(SystemRole::class);
    }

    public function officeHeads()
    {
        return $this->hasMany(OfficeHead::class)->where('is_active', True);
    }

    public function appointedToOffice($officeId)
    {
        $appointmentsToOffice =  DB::table('appointments')
            ->select('users.id as user_id', 'users.name as name', 'users.last_name as last_name', 'positions.name as position_name', 'offices.name as office_name')
            // ->select('positions.name as position_name')
            // ->select('offices.name as office_name')
            ->join('plantillas', 'appointments.plantilla_id', '=', 'plantillas.id')
            ->join('users', 'users.id', '=', 'appointments.user_id')
            ->join('positions', 'positions.id', '=', 'plantillas.position_id')
            ->join('offices', 'offices.id', '=', 'plantillas.office_id')
            ->where('plantillas.office_id', $officeId)
            ->get();

        return $appointmentsToOffice;
    }

    public function employeeTransfer()
    {
        // return $this->hasMany(EmployeeTransfer::class);
        $employeeTransfer = EmployeeTransfer::where('user_id', $this->id)
            ->where('is_active', true)
            ->first();

        return $employeeTransfer;
    }

    public function leaveApplications()
    {
        return $this->hasMany(LeaveApplication::class);
    }

    public function leaveCredits()
    {
        return $this->hasMany(LeaveCredit::class);
    }

    /**
     * Shows details of the active appointment of one user
     *
     * @return void
     */
    public function activeAppointment()
    {
        $appointment = Appointment::where('plantilla_id', $this->id)
            ->where('is_active', true)
            ->first();

        return $appointment;
    }



    public function remainingLeaveCredits() {}


    public function remainingLeavesOfUser()
    {
        return LeaveCredit::query()
            ->select(
                DB::raw('SUM(CASE WHEN leave_credit_type = 1 THEN IF(is_added = 1, credit, -credit) ELSE 0 END) AS available_VL'),
                DB::raw('SUM(CASE WHEN leave_credit_type = 2 THEN IF(is_added = 1, credit, -credit) ELSE 0 END) AS available_SL')
            )
            ->where('user_id', $this->id)
            ->first();

        // return DB::table('leave_credits')
        // ->join('users', 'leave_credits.user_id', '=', 'users.id')
        //  ->selectRaw('leave_credits.user_id as user_id, users.name as first_name, users.last_name as last_name, sum(CASE WHEN leave_credits.leave_credit_type = 1 THEN leave_credits.credit ELSE 0 END) as sum_vacation_leaves, sum(CASE WHEN leave_credits.leave_credit_type = 3 THEN leave_credits.credit ELSE 0 END) as sum_sick_leaves')
        // ->groupBy('leave_credits.user_id')
        // ->where('leave_credits.user_id', $user->id)
    }

    public function isSystemAdmin()
    {
        $systemAdmin = DB::table('system_roles')->where('role', 'system_admin')
            ->where('user_id', $this->id)->first();

        return $systemAdmin ? true : false;
    }

    /**
     * Returns properties of active JobOrderContract of user
     *
     * @return void
     */
    public function activeJobOrderContract()
    {
        $appointment = JobOrderContract::where('user_id', $this->id)
            ->where('is_active', true)
            ->first();

        return $appointment;
    }

    public function jobOrderContract()
    {
        return $this->hasOne(JobOrderContract::class)->where('is_active', true);
    }

    public function individualPerformanceContracts()
    {
        return $this->hasMany(IndividualPerformanceContract::class);
    }
}
