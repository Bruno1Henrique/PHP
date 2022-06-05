<?php
session_start();

$_SESSION["nome"] = "Henrique";
$_SESSION["profissao"] = "QA";

session_unset();