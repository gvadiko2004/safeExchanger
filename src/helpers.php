<?php

const DB_HOST = 'localhost'; // Локальный сервер
const DB_NAME = 'safe_exchange'; // Имя базы данных
const DB_USER = 'root'; // Имя пользователя базы данных
const DB_PASS = ''; // Пароль базы данных

function getDB() {
    return mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
}
