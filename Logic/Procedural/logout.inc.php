<?php
session_start();
session_destroy();
header('Location:../../Public/HTMLfiles/index.html');
