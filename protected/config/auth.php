<?php
/**
 * Created by PhpStorm.
 * User: Doston
 * Date: 07.01.2016
 * Time: 13:41
 */
return array(
    'guest' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Guest',
        'bizRule' => null,
        'data' => null
    ),
    '1' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'User',
        'children' => array(
            'guest', // ������������ �� �����
        ),
        'bizRule' => null,
        'data' => null
    ),
    '2' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Moderator',
        'children' => array(
            'user',          // �������� ���������� ��, ��� ��������� ������������
        ),
        'bizRule' => null,
        'data' => null
    ),
    '0' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Admin',
        'children' => array(
            'moderator',         // �������� ������ ��, ��� ��������� ����������
        ),
        'bizRule' => null,
        'data' => null
    ),
);