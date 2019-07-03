<?

namespace Somemodule\Productlist;

use Bitrix\Main\Entity;
use Bitrix\Main\Localization\Loc;

class ProductTable extends Entity\DataManager {

    /**
     * @return string
     */
    public static function getTableName() {
        return 'my_products';
    }

    /**
     * @return array
     */
    public static function getMap() {
        return array(
            new Entity\IntegerField('ID', array(
                'primary' => true,
                'autocomplete' => true,
                'column_name' => Loc::getMessage('DATA_ENTITY_ID_FIELD'),
            )),
            new Entity\StringField('UF_NAME', array(
                'required' => true,
                'column_name' => Loc::getMessage('DATA_ENTITY_NAME_FIELD'),
            )),
            new Entity\StringField('UF_PRICE', array(
                'column_name' => Loc::getMessage('DATA_ENTITY_PRICE_FIELD'),
            ))
        );
    }
}