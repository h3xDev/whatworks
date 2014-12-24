<div class="content">
    <h1>Change account type</h1>
    <p>
        This page is a basic implementation of the upgrade-process.
        User can click on that button to upgrade their accounts from
        "basic account" to "premium account". This script simple offers
        a click-able button that will upgrade/downgrade the account instantly.
        In a real world application you would implement something like a
        pay-process.
    </p>
    <p>
        This view belong to the login-controller / changeaccounttype()-method.
        The model used is login->changeAccountType().
    </p>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

<?php  if(Session::get('user_account_type') == 2) { ?>
    <!--<h2>Currently your account type is: <?php echo Session::get('user_account_type'); ?></h2>-->
    <h2>Currently you have a paid subscription</h2>
    <form action="<?php echo URL; ?>login/changeaccounttype_action" method="post">
        <label></label>
        <input type="submit" name="user_account_downgrade" value="Cancel my subscription" />
    </form>
<?php } ?>

<?php if (Session::get('user_account_type') == 1) { ?>
	<h2>You currently do <strong>not</strong> have a paid subscription</h2>
	<form action="<?php echo URL; ?>login/changeaccounttype_action" method="post">
        	<label></label>
        	<input type="submit" name="user_account_upgrade" value="Subscribe" />
    	</form>

<?php } ?>
</div>
