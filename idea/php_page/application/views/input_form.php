
<h2>Input</h2>

<?php $this->load->helper('form'); ?>

<?php echo form_open('idea/php_page/index.php/input/create') ?>

    <label for="login">You login:</label>
    <input type="text" name="login" size="50">

    <label for="text">You password:</label>
    <input type="password" name="password" size="50">

    <input type="submit" name="submit" value="Input" />
</form>
