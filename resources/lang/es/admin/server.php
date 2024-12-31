<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * Este software está licenciado bajo los términos de la licencia MIT.
 * https://opensource.org/licenses/MIT
 */

return [
    'exceptions' => [
        'no_new_default_allocation' => 'Estás intentando eliminar la asignación predeterminada para este servidor, pero no hay una asignación alternativa disponible.',
        'marked_as_failed' => 'Este servidor fue marcado como fallido en una instalación previa. El estado actual no se puede cambiar en esta situación.',
        'bad_variable' => 'Hubo un error de validación con la variable :name.',
        'daemon_exception' => 'Se produjo una excepción al intentar comunicarse con el daemon, lo que resultó en un código de respuesta HTTP/:code. Esta excepción ha sido registrada. (ID de solicitud: :request_id)',
        'default_allocation_not_found' => 'La asignación predeterminada solicitada no se encontró en las asignaciones de este servidor.',
    ],
    'alerts' => [
        'startup_changed' => 'La configuración de inicio para este servidor ha sido actualizada. Si se cambió el grupo o el Egg del servidor, se realizará una reinstalación ahora.',
        'server_deleted' => 'El servidor se ha eliminado correctamente del sistema.',
        'server_created' => 'El servidor se creó correctamente en el panel. Por favor, espera unos minutos mientras el daemon completa la instalación de este servidor.',
        'build_updated' => 'Los detalles de la configuración para este servidor han sido actualizados. Algunos cambios pueden requerir un reinicio para surtir efecto.',
        'suspension_toggled' => 'El estado de suspensión del servidor se ha cambiado a :status.',
        'rebuild_on_boot' => 'Este servidor ha sido marcado como que requiere una reconstrucción del contenedor Docker. Esto sucederá la próxima vez que el servidor se inicie.',
        'install_toggled' => 'El estado de instalación para este servidor ha sido modificado.',
        'server_reinstalled' => 'Este servidor ha sido puesto en cola para una reinstalación que comenzará ahora.',
        'details_updated' => 'Los detalles del servidor se han actualizado correctamente.',
        'docker_image_updated' => 'Se ha cambiado correctamente la imagen Docker predeterminada para este servidor. Se requiere un reinicio para aplicar este cambio.',
        'node_required' => 'Debes tener al menos un nodo configurado antes de poder añadir un servidor a este panel.',
        'transfer_nodes_required' => 'Debes tener al menos dos nodos configurados antes de poder transferir servidores.',
        'transfer_started' => 'La transferencia del servidor ha comenzado.',
        'transfer_not_viable' => 'El nodo seleccionado no tiene el espacio en disco o memoria necesarios para alojar este servidor.',
    ],
];