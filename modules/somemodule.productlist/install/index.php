<?

use \Bitrix\Main\ModuleManager;

Class Somemodule_Productlist extends CModule {

    var $MODULE_ID = "somemodule.productlist";
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $errors;

    function __construct() {
        $this->MODULE_VERSION = "1.0.0";
        $this->MODULE_VERSION_DATE = "02.07.2019";
        $this->MODULE_NAME = "Интерфейс в модуле";
        $this->MODULE_DESCRIPTION = "Модуль для тестового задания";
    }

    function DoInstall() {
        $this->InstallDB();
        $this->InstallEvents();
        $this->InstallFiles();
        RegisterModule("somemodule.productlist");
        return true;
    }

    function DoUninstall() {
        $this->UnInstallDB();
        $this->UnInstallEvents();
        $this->UnInstallFiles();
        UnRegisterModule("somemodule.productlist");
        return true;
    }

    function InstallDB() {
        global $DB;
        $this->errors = false;
        $this->errors = $DB->RunSQLBatch($_SERVER['DOCUMENT_ROOT'] . "/local/modules/somemodule.productlist/install/db/install.sql");
        if (!$this->errors) {

            return true;
        } else
            return $this->errors;
    }

    function UnInstallDB() {
        global $DB;
        $this->errors = false;
        $this->errors = $DB->RunSQLBatch($_SERVER['DOCUMENT_ROOT'] . "/local/modules/somemodule.productlist/install/db/uninstall.sql");
        if (!$this->errors) {
            return true;
        } else
            return $this->errors;
    }

    function InstallEvents() {
        return true;
    }

    function UnInstallEvents() {
        return true;
    }

    function InstallFiles() {
        return true;
    }

    function UnInstallFiles() {
        return true;
    }
}