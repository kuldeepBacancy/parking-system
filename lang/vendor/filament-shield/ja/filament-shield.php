<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Table Columns
    |--------------------------------------------------------------------------
    */

    'column.name' => '名前',
    'column.guard_name' => 'ガード名',
    'column.roles' => 'ロール',
    'column.permissions' => 'パーミッション',
    'column.updated_at' => '更新日時',

    /*
    |--------------------------------------------------------------------------
    | Form Fields
    |--------------------------------------------------------------------------
    */

    'field.name' => '名前',
    'field.guard_name' => 'ガード名',
    'field.permissions' => 'パーミッション',
    'field.select_all.name' => 'すべて選択',
    'field.select_all.message' => 'このロールに対して現在<span class="text-primary font-medium">有効</span>となっているすべての権限を有効にします。',

    /*
    |--------------------------------------------------------------------------
    | Navigation & Resource
    |--------------------------------------------------------------------------
    */

    'nav.group' => 'Roles and Permission',
    'nav.role.label' => 'ロール',
    'nav.role.icon' => 'heroicon-o-shield-check',
    'resource.label.role' => 'ロール',
    'resource.label.roles' => 'ロール',

    /*
    |--------------------------------------------------------------------------
    | Section & Tabs
    |--------------------------------------------------------------------------
    */

    'section' => 'エンティティ',
    'resources' => 'リソース',
    'widgets' => 'ウィジェット',
    'pages' => 'ページ',
    'custom' => 'カスタムパーミッション',

    /*
    |--------------------------------------------------------------------------
    | Messages
    |--------------------------------------------------------------------------
    */

    'forbidden' => 'アクセスするパーミッションがありません。',

    /*
    |--------------------------------------------------------------------------
    | Resource Permissions' Labels
    |--------------------------------------------------------------------------
    */

    'resource_permission_prefixes_labels' => [
        'view' => '表示',
        'view_any' => 'どれでも表示',
        'create' => '作成',
        'update' => '更新',
        'delete' => '削除',
        'delete_any' => 'どれでも削除',
        'force_delete' => '強制削除',
        'force_delete_any' => 'どれでも強制削除',
        'restore' => 'リストア',
        'reorder' => '並べ直し',
        'restore_any' => 'どれでもリストア',
        'replicate' => 'レプリカ',
    ],
];
