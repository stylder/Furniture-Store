<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Líneas de mensajes
    |--------------------------------------------------------------------------
    |
    | Las siguientes líneas de mensajes se usan durante la sessión para varios
    | mensajes que necesitamos mostrar al usuario. Eres libre de modificar
    | estas líneas de lenguaje según los requisitos de tu aplicación.
    |
    */

    'shop' => config('app.name'),

    // Navigation

    'agents' => 'Agentes',
    'orders' => 'Órdenes',
    'payments' => 'Pagos',
    'customers' => 'Clientes',
    'update' => 'Actualizar',

    // Settings
    'fontSize' => 'Tamaño de la fuente:',
    
    //Buttons
    
    'button' => [
        'save' => 'Guardar'
    ],

    // Dashboard
    'dashboard' => [
        'increase' => 'aumento',
        'total_orders' => 'Total de órdenes',
        'total_customers' => 'Total Clientes',
        'total_revenue' => 'Ingresos Totales',
        'new_customers_last_mount' => 'Nuevos Clientes (Último mes)',
        'avg_renevue_per_customer' => 'Ingresos promedio por cliente',
        'avg_orders_per_customer' => 'Órdenes promedio por cliente',
    ],

    // Customers
    'customer' => [
        'customer'  => 'cliente',
        'name'      => 'Nombre',
        'phone'     => 'Teléfono',
        'city'      => 'Ciudad',
        'colony'    => 'Colonia',
        'address'   => 'Dirección',
        'street_1'  => 'Entre calle 1',
        'street_2'  => 'Entre calle 2',

        'create_customer' => 'Crear cliente',

        'status_customer' => 'Status del cliente',
        'rating_customer' => 'Calificar al Cliente',
        'status_unknown'  => 'Desconocido',
        'status_bad'      => 'Moroso',
        'status_good'     => 'Bueno',
        'status_excellent' => 'Excelente' 
    ],

    // Agents
    'agent' => [
        'agent'     => 'agente',
        'name'      => 'Nombre',
        'phone'     => 'Teléfono',
        'created_at' => 'Creado'
    ],

    // Orders
    'order' => [
        'order'     => 'órden',
        'total'     => 'Total',
        'number'    => 'Número',
        'customer'  => 'Cliente',
        'agent'     => 'Agente',
        'route'     => 'Ruta',
        'payment_conditions' => 'Condiciones de Pago',
        'notes'     => 'Notas',
        'print'     => 'Imprimir',
        'print_payments'     => 'Imprimir pagos',

        'product'   => 'Producto',
        'qty'       => 'Cantidad',
        'unit_price' => 'Precio unitario',

        'order_items' => 'Lista de artículos',
        'order_details' => 'Detalle de órden',

        'created_at' => 'Creado',
        'update_at'  => 'Última actualización',
        'archived_at'=> 'Archivadas',
        'not_archived' => 'No archivadas',
        'file_qualify' => 'Archivar y Calificar',
        'unarchive' => 'Desarchivar',
        'all' => 'Todas las Ordenes',
        'paid_orders' => 'Ordenes Pagadas',
        'filed_successfully' => 'Orden archivada exitosamente.',
        'successfully_unarchived' => 'Orden desarchivada exitosamente.',
    
        'total_paid' => 'Abonado',
        'total_due'  => 'Restante',
        'payment_summary' => 'Saldos',
        'advance' => 'Anticipo',

        // Status Enum
        'pending'   => 'Pendiente',
        'processing'=> 'Procesando',
        'completed' => 'Completado',
        'declined'  => 'Cancelado',

        'open_order' => 'Abrir',

        'is_settled' => 'Liquidado',
        'amount_due' => 'Adeudo'
    ],

    // Payments
    'payment' => [
        'payment' => 'Pago',
        'reference' => 'Referencia',
        'amount' => 'Monto',
        'remaining_balance' => 'Saldo restante',
        'created_at' => 'Creado',
    ],

    //Reports
    'reports' => [
        'report' => 'Reporte',
        'payments_report' => 'Reporte de Pagos',
        'orders_report' => 'Reporte de Ordenes',
        'select_date_range' => 'Rango de fechas',
        'search_product' => 'Buscar producto',
        'search_customer' => 'Buscar Cliente',
    ],

    'settings' => [
        'settings' => 'Configuración',
        'updated_successfully' => 'Configuración actualizada exitosamente.',
    ]
];
