<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * Este software está licenciado bajo los términos de la licencia MIT.
 * https://opensource.org/licenses/MIT
 */

return [
    'notices' => [
        'created' => 'Se ha creado con éxito un nuevo grupo, :name.',
        'deleted' => 'El grupo solicitado se ha eliminado correctamente del Panel.',
        'updated' => 'Las opciones de configuración del grupo se han actualizado correctamente.',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'Se ha importado con éxito este Egg y sus variables asociadas.',
            'updated_via_import' => 'Este Egg se ha actualizado utilizando el archivo proporcionado.',
            'deleted' => 'El Egg solicitado se ha eliminado correctamente del Panel.',
            'updated' => 'La configuración del Egg se ha actualizado correctamente.',
            'script_updated' => 'El script de instalación del Egg se ha actualizado y se ejecutará cuando se instalen servidores.',
            'egg_created' => 'Se ha creado un nuevo Egg correctamente. Deberás reiniciar cualquier daemon en ejecución para aplicar este nuevo Egg.',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => 'La variable ":variable" ha sido eliminada y ya no estará disponible para los servidores una vez reconstruidos.',
            'variable_updated' => 'La variable ":variable" ha sido actualizada. Deberás reconstruir los servidores que usen esta variable para aplicar los cambios.',
            'variable_created' => 'Se ha creado y asignado correctamente una nueva variable a este Egg.',
        ],
    ],
];