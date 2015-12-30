<?php if (!defined('IN_PHPBB')) exit; ?>Subject: Добре дошли в "<?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?>"

<?php echo (isset($this->_rootref['WELCOME_MSG'])) ? $this->_rootref['WELCOME_MSG'] : ''; ?>


Пазете това съобщение, то съдържа важна информация.

----------------------------
Потребителско име: <?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>


Адрес на форума: <?php echo (isset($this->_rootref['U_BOARD'])) ? $this->_rootref['U_BOARD'] : ''; ?>

----------------------------

Моля не забравяйте Вашата парола, защото тя е криптирана и ние не можем да Ви я пратим. Но в случай че я забравите, можете да поискате нова, която ще Ви бъде пратена по същия начин като тази.

Благодарим Ви, че се регистрирахте!

<?php echo (isset($this->_rootref['EMAIL_SIG'])) ? $this->_rootref['EMAIL_SIG'] : ''; ?>