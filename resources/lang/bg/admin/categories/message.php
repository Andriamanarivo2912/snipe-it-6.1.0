<?php

return array(

    'does_not_exist' => 'Категорията не съществува.',
    'assoc_models'	 => 'Тази категория е свързана с поне един модел или не може да бъде изтрита Моля проверете за модели, които все още се препращат към тази категория и опитайте отново.',
    'assoc_items'	 => 'Тази категория е свързана с поне един :asset_type или не може да бъде изтрита Моля проверете за :asset_type, които все още се препращат към тази категория и опитайте отново.',

    'create' => array(
        'error'   => 'Категорията не беше създадена. Моля опитайте отново.',
        'success' => 'Категорията е създадена.'
    ),

    'update' => array(
        'error'   => 'Категорията не беше обновена. Моля опитайте отново',
        'success' => 'Категорията е обновена успешно.',
        'cannot_change_category_type'   => 'You cannot change the category type once it has been created',
    ),

    'delete' => array(
        'confirm'   => 'Желаете ли да изтриете тази категория?',
        'error'   => 'Проблем при изтриване на категорията. Моля опитайте отново.',
        'success' => 'Категорията бе изтрита успешно.'
    )

);