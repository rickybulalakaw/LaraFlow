<?php 

namespace App\Services; 

use App\Models\User;

class UserService
{

  /**
   * This function updates the XX attribute of user in users table to student
   *
   * @param User $user
   * @return void
   */
  public function setUserAsStudent ( User $user )
  {

    // Logic to set role of user as student 

  } 


  public function setuserAsTeacher ( User $user)
  {
    // Logic to set role of user as teacher 
  }

  public function disableUser (User $user)
  {
    // Logic to change 
  }
}