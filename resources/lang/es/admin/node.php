<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * Este software está licenciado bajo los términos de la licencia MIT.
 * https://opensource.org/licenses/MIT
 */

return [
    'validation' => [
        'fqdn_not_resolvable' => 'El FQDN o dirección IP proporcionada no resuelve a una dirección IP válida.',
        'fqdn_required_for_ssl' => 'Se requiere un nombre de dominio completamente calificado que resuelva a una dirección IP pública para usar SSL en este nodo.',
    ],
    'notices' => [
        'allocations_added' => 'Las asignaciones se han añadido correctamente a este nodo.',
        'node_deleted' => 'El nodo se ha eliminado correctamente del panel.',
        'location_required' => 'Debes tener al menos una ubicación configurada antes de poder añadir un nodo a este panel.',
        'node_created' => 'Se ha creado correctamente un nuevo nodo. Puedes configurar automáticamente el daemon en esta máquina visitando la pestaña \'Configuración\'. <strong>Antes de agregar servidores, debes asignar al menos una dirección IP y un puerto.</strong>',
        'node_updated' => 'La información del nodo se ha actualizado. Si se cambiaron configuraciones del daemon, necesitarás reiniciarlo para que los cambios surtan efecto.',
        'unallocated_deleted' => 'Se han eliminado todos los puertos no asignados para <code>:ip</code>.',
    ],
];