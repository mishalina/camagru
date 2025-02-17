<main>
    <h1>Camagru</h1>
    <h3 id="main_msg" style="display: none"></h3>
    <div id="form1" class="forms">
        <h2>Login</h2>
        <form id="login_form">
            <input id="login" type="text" placeholder="Username" minlength="5" maxlength="20" required>
            <input id="passwd" type="password" placeholder="Password" minlength="8" maxlength="20" required>
            <p id="login_msg" class="error_msg"></p>
            <input id="login_submit" type="button" value="OK" onclick="login_validate()">
            <a href="javascript:put_resetpass_form()">Forgot password ?</a>
        </form>
    </div>
    <div id="form2" class="forms">
        <h2>Register</h2>
        <form id="register_form">
            <input id="username" type="text" placeholder="Username" minlength="5" maxlength="20" required>
            <input id="pass1" type="password" placeholder="Password" minlength="8" maxlength="20" required>
            <input id="pass2" type="password" placeholder="Confirm Password" minlength="8" maxlength="20" required>
            <input id="email" type="email" placeholder="Email" required>
            <p id="register_msg" class="error_msg"></p>
            <input id="register_submit" type="button" value="OK" onclick="register_validate()">
        </form>
    </div>
    <div id="form3" class="forms" style="display: none">
        <h2>Reset password</h2>
        <form id="resetpass_form">
            <input id="resetpass_login" type="text" placeholder="Username" minlength="5" maxlength="20">
            <input id="resetpass_email" type="email" placeholder="Email">
            <p id="resetpass_msg" class="error_msg"></p>
            <input id="resetpass_submit" type="button" value="OK" onclick="resetpass_validate()">
            <button class="back" type="button" onclick="put_login_form()">Back</button>
        </form>
    </div>
</main>