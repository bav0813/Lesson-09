<?php

/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 23.02.2018
 * Time: 20:51
 */

if (!empty($_POST)) {
    // die('<pre>' . print_r($_POST, 1) . '</pre>');
    if (validateContactData($_POST)) {
        addContactData($_POST);
    }
}

echo getErrors();

echo '<hr>';

/*echo '<form action="" method="post">' .
    '<div><label for="uname1">User name <i>*</i>: </label> <input type="text" id="uname1" name="uname" required></div>' .
    '<div><label for="umail1">Email <i>*</i>: </label> <input type="text" id="umail1" name="uemail" required></div>' .
    '<div><label for="utel1">Phone: </label> <input type="text" id="utel1" name="utel"></div>' .
    '<div><label for="umail1">Message <i>*</i>: </label><br><textarea name="umsg" required></textarea></div>' .
    '<div class="g-recaptcha" data-sitekey="6Lei1TIUAAAAAKLLF_9esLY1CyvbH34Nm0dRCnIL"></div>' .
    '<div><input type="submit" value="Add comment"></div>'.
    '<div><i>*</i> - required fields</div>' .
    '</form>';
*/?>

  <form id="signupform" action="" method="post">
  <div class="form-group">
    <label for="uname1">User name<i>*</i>:</label>
    <input type="text" class="form-control" id="uname1" name="uname" required>
  </div>
  <div class="form-group">
    <label for="umail1">Email<i>*</i>:</label>
    <input type="email" class="form-control" id="umail1" name="uemail" required>
  </div>
      <div class="form-group">
          <label for="utel1">Phone:</label>
          <input type="text" class="form-control" id="utel1" name="utel">
      </div>
      <div class="form-group">
          <label for="umsg">Message <i>*</i>:</label>
          <textarea class="form-control" id="umsg1" name="umsg" rows="3" required></textarea>
      </div>

      <div><i>*</i> - required fields</div>
      <div class="g-recaptcha" data-sitekey="6Lei1TIUAAAAAKLLF_9esLY1CyvbH34Nm0dRCnIL"></div><br>
  <button type="submit" class="btn btn-primary">Add comment</button>


</form>
<hr>


<?php
echo getComments();
