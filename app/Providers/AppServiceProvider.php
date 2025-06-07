<?php

namespace App\Providers;

use App\Models\User;
use Laravel\Sanctum\Sanctum;
use App\Models\SystemSetting;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Database\Eloquent\Model;
// use Laravel\Sanctum\PersonalAccessToken;
use Illuminate\Support\ServiceProvider;
// use App\Models\Sanctum\PersonalAccessToken;
use App\Policies\LeaveApplicationPolicy;
use Laravel\Sanctum\PersonalAccessToken;
use App\Models\personnel\LeaveApplication;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // use Illuminate\Support\Facades\Gate;

        Model::preventLazyLoading(! app()->isProduction());

        Sanctum::usePersonalAccessTokenModel(PersonalAccessToken::class);

  


        Gate::define('system_admin', function (User $user) {         

            return $user->is_system_admin
                ? Response::allow()
                : Response::deny('This function is limited to the System Administrator.');
        });

        Gate::define('head_of_agency', function (User $user) {
            $headOfAgency = DB::table('system_roles')->where('role', 'head_of_agency')
                ->where('user_id', $user->id)->first();

            return $headOfAgency
                ? Response::allow()
                : Response::deny('This function is limited to the System Administrator.');
        });

        Gate::define('core_admin', function (User $user) {
            $coreAdminUser = DB::table('system_roles')->where('role', 'core_admin')
                ->where('user_id', $user->id)->first();

            return $coreAdminUser
                ? Response::allow()
                : Response::deny('This function is limited to the HR Core Administrator.');
        });

        Gate::define('competency_admin', function (User $user) {
            $competencyAdminUser = DB::table('system_roles')->where('role', 'competency_admin')
                ->where('user_id', $user->id)->first();

            return $competencyAdminUser
                ? Response::allow()
                : Response::deny('This function is limited to the Competency Administrator.');
        });

        Gate::define('personnel_admin', function (User $user) {
            $personnelAdminUser = DB::table('system_roles')->where('role', 'personnel_admin')
                ->where('user_id', $user->id)->first();

            return $personnelAdminUser
                ? Response::allow()
                : Response::deny('This function is limited to the Personnel Administrator.');
        });

        Gate::define('appointment_admin', function (User $user) {
            $appointmentAdminUser = DB::table('system_roles')->where('role', 'appointment_admin')
                ->where('user_id', $user->id)->first();

            return $appointmentAdminUser
                ? Response::allow()
                : Response::deny('This function is limited to the PErsonnel Appointments Administrator.');
        });

        Gate::define('office_plan_admin', function (User $user) {
            $officePlanAdminUser = DB::table('system_roles')->where('role', 'office_plan_admin')
                ->where('user_id', $user->id)->first();

            return $officePlanAdminUser
                ? Response::allow()
                : Response::deny('This function is limited to the Office Plans Administrator.');
        });

        Gate::define('individual_performance_admin', function (User $user) {
            $individualPerformanceAdminUser = DB::table('system_roles')->where('role', 'individual_performance_admin')
                ->where('user_id', $user->id)->first();

            return $individualPerformanceAdminUser
                ? Response::allow()
                : Response::deny('This function is limited to the Individual Performance Administrator.');
        });

        Gate::define('performance_management_team_chair', function (User $user) {
            $performanceManagementTeamChair = DB::table('system_roles')->where('role', 'performance_management_team_chair')
                ->where('user_id', $user->id)->first();

            return $performanceManagementTeamChair
                ? Response::allow()
                : Response::deny('This function is limited to the Performance Management Team.');
        });

        Gate::define('planning_office_staff', function (User $user) {

            // Get office set as PLanning Office 
            $getPlanningOfficeSetInSystem = SystemSetting::where('setting_name', 'planning_office_id')->first();

            $planningOfficeId = $getPlanningOfficeSetInSystem->setting_value;

            $systemAdmin = DB::table('system_roles')->where('role', 'system_admin')
                ->where('user_id', $user->id)->first();

            // return $user->appointment->plantilla->office_id === $planningOfficeId
            return ($systemAdmin || $user->appointment->plantilla->office_id === $planningOfficeId)
                ? Response::allow()
                : Response::deny('This function is limited to the Planning Office as PMT Secretariat');

            // check current user has appointment in planning office 


            // $performanceManagementTeamSecretariat = DB::table('system_roles')->where('role', 'performance_management_team_secretariat_head')
            //     ->where('user_id', $user->id)->first();

            // return $performanceManagementTeamSecretariat
            //     ? Response::allow()
            //     : Response::deny('This function is limited to the Head of the Secretariat to the Performance Management Team.');
        });

        Gate::define('performance_management_team_secretariat_head', function (User $user) {
            $performanceManagementTeamSecretariatHead = DB::table('system_roles')->where('role', 'performance_management_team_secretariat_head')
                ->where('user_id', $user->id)->first();

            return $performanceManagementTeamSecretariatHead
                ? Response::allow()
                : Response::deny('This function is limited to the Head of the Secretariat to the Performance Management Team.');
        });

        Gate::define('personnel_selection_board_chair', function (User $user) {
            $personnelSelectionBoardChair = DB::table('system_roles')->where('role', 'personnel_selection_board_chair')
                ->where('user_id', $user->id)->first();

            return $personnelSelectionBoardChair
                ? Response::allow()
                : Response::deny('This function is limited to the Chairperson of the Personnel Selection Board.');
        });

        Gate::define('personnel_development_committee_chair', function (User $user) {
            $personnelDevelopmentCommitteeChair = DB::table('system_roles')->where('role', 'personnel_development_committee_chair')
                ->where('user_id', $user->id)->first();

            return $personnelDevelopmentCommitteeChair
                ? Response::allow()
                : Response::deny('This function is limited to the Chairperson of the Personnel Development Committee.');
        });

        // Gate::define('spmsChampion', function (User $user) {
        //     $spmsChampion = DB::table('system_roles')->where('role', 'spms_champion')
        //     ->where('user_id', $user->id)->first();

        //     return $spmsChampion
        //         ? Response::allow()
        //         : Response::deny('This function is limited to the designated SPMS Champion.');
        // });



        Gate::define('officeHead', function (User $user) {
            $officeHead = DB::table('office_heads')
                ->where('user_id', $user->id)
                ->where('is_active', true)
                ->first();

            return $officeHead
                ? Response::allow()
                : Response::deny('This function is limited to the Office Head.');
        });



        DB::prohibitDestructiveCommands($this->app->isProduction());




        Gate::policy(
            LeaveApplication::class,
            LeaveApplicationPolicy::class,
        );
    }
}
