<?php

        require("class.user2.php");
        require("class.pdofactory.php");

        print "Running...<br />";

        $strDSN = "pgsql:dbname=usuaris;host=localhost;port=5432";
        $objPDO = PDOFactory::GetPDO($strDSN, "postgres", "root",array());
        $objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



        $objUser = new User($objPDO);

        $objUser->setFirstName("usuarioDelete1");
        $objUser->setLastName("AusuarioDelete1");
        $objUser->setUsername("UsenameDelete1");
        $objUser->setPassword("password D 1");
        $objUser->setEmailAddress("del1@email.com");
        $objUser->setDateLastLogin("2024-03-25");
        $objUser->setTimeLastLogin("20:20:33");
        $objUser->setDateAccountCreated("2024-03-25");
        $objUser->setTimeAccountCreated("20:20:33");

        echo "Información del Primer Usuario: <br />";
        echo "ID: " . $objUser->getID() . "<br />";
        echo "Nombre: " . $objUser->getFirstName() . "<br />";
        echo "Apellido: " . $objUser->getLastName() . "<br />";
        echo "Contraseña: " . $objUser->getUsername() . "<br />";
        echo "Nombre de Usuario: " . $objUser->getPassword() . "<br />";
        echo "Correo Electrónico: " . $objUser->getEmailAddress() . "<br />";
        echo "Fecha último inicio de sesión: " . $objUser->getDateLastLogin() . "<br />";
        echo "Hora último inicio de sesión: " . $objUser->getTimeLastLogin() . "<br />";
        echo "Fecha de creación de cuenta: " . $objUser->getDateAccountCreated() . "<br />";
        echo "Hora de creación de cuenta: " . $objUser->getTimeAccountCreated() . "<br/><br/>";
        

        $objUser2 = new User($objPDO);

        $objUser2->setFirstName("usuarioDelete2");
        $objUser2->setLastName("AusuarioDelete2");
        $objUser2->setUsername("UsenameDelete2");
        $objUser2->setPassword("password D 2");
        $objUser2->setEmailAddress("del2@email.com");
        $objUser2->setDateLastLogin("2003-01-05");
        $objUser2->setTimeLastLogin("15:01:14");
        $objUser2->setDateAccountCreated("2002-06-30");
        $objUser2->setTimeAccountCreated("15:25:43");

        echo "Información del Segundo Usuario: <br />";
        echo "ID: " . $objUser2->getID() . "<br />";
        echo "Nombre: " . $objUser2->getFirstName() . "<br />";
        echo "Apellido: " . $objUser2->getLastName() . "<br />";
        echo "Contraseña: " . $objUser2->getUsername() . "<br />";
        echo "Nombre de Usuario: " . $objUser2->getPassword() . "<br />";
        echo "Correo Electrónico: " . $objUser2->getEmailAddress() . "<br />";
        echo "Fecha último inicio de sesión: " . $objUser2->getDateLastLogin() . "<br />";
        echo "Hora último inicio de sesión: " . $objUser2->getTimeLastLogin() . "<br />";
        echo "Fecha de creación de cuenta: " . $objUser2->getDateAccountCreated() . "<br />";
        echo "Hora de creación de cuenta: " . $objUser2->getTimeAccountCreated() . "<br/><br/>";

        $objUser3 = new User($objPDO);

        $objUser3->setFirstName("usuarioDelete3");
        $objUser3->setLastName("AusuarioDelete3");
        $objUser3->setUsername("UsenameDelete3");
        $objUser3->setPassword("password D 3");
        $objUser3->setEmailAddress("del3@email.com");
        $objUser3->setDateLastLogin("2015-02-24");
        $objUser3->setTimeLastLogin("14:35:14");
        $objUser3->setDateAccountCreated("2010-06-29");
        $objUser3->setTimeAccountCreated("23:48:01");

        echo "Información del Tercer Usuario: <br />";
        echo "ID: " . $objUser3->getID() . "<br />";
        echo "Nombre: " . $objUser3->getFirstName() . "<br />";
        echo "Apellido: " . $objUser3->getLastName() . "<br />";
        echo "Contraseña: " . $objUser3->getUsername() . "<br />";
        echo "Nombre de Usuario: " . $objUser3->getPassword() . "<br />";
        echo "Correo Electrónico: " . $objUser3->getEmailAddress() . "<br />";
        echo "Fecha último inicio de sesión: " . $objUser3->getDateLastLogin() . "<br />";
        echo "Hora último inicio de sesión: " . $objUser3->getTimeLastLogin() . "<br />";
        echo "Fecha de creación de cuenta: " . $objUser3->getDateAccountCreated() . "<br />";
        echo "Hora de creación de cuenta: " . $objUser3->getTimeAccountCreated() . "<br/><br/>";
        

        $objUser->Save();
        $objUser2->Save();
        $objUser3->Save();

        $auxiliar = '';
        $auxiliar = $objUser2->getFirstName();
        $objUser2->setFirstName($objUser->getFirstName());
        $objUser->setFirstName($auxiliar);
        $auxiliar = $objUser2->getLastName();
        $objUser2->setLastName($objUser->getLastName());
        $objUser->setLastName($auxiliar);
        $auxiliar = $objUser2->getUsername();
        $objUser2->setUsername($objUser->getUsername());
        $objUser->setUsername($auxiliar);
        $auxiliar = $objUser2->getPassword();
        $objUser2->setPassword($objUser->getPassword());
        $objUser->setPassword($auxiliar);
        $auxiliar = $objUser2->getEmailAddress();
        $objUser2->setEmailAddress($objUser->getEmailAddress());
        $objUser->setEmailAddress($auxiliar);
        $auxiliar = $objUser2->getDateLastLogin();
        $objUser2->setDateLastLogin($objUser->getDateLastLogin());
        $objUser->setDateLastLogin($auxiliar);
        $auxiliar = $objUser2->getTimeLastLogin();
        $objUser2->setTimeLastLogin($objUser->getTimeLastLogin());
        $objUser->setTimeLastLogin($auxiliar);
        $auxiliar = $objUser2->getDateAccountCreated();
        $objUser2->setDateAccountCreated($objUser->getDateAccountCreated());
        $objUser->setDateAccountCreated($auxiliar);
        $auxiliar = $objUser2->getTimeAccountCreated();
        $objUser2->setTimeAccountCreated($objUser->getTimeAccountCreated());
        $objUser->setTimeAccountCreated($auxiliar);

        $objUser3->setFirstName("usuarioDelete3Actualizado");
        $objUser3->setLastName("AusuarioDelete2Actualizado");
        $objUser3->setUsername("UsenameDelete2Actualizado");
        $objUser3->setPassword("password D 2Actualizado");
        $objUser3->setEmailAddress("del2@emailActualizado.com");
        $objUser3->setDateLastLogin("2013-01-05");
        $objUser3->setTimeLastLogin("15:21:14");
        $objUser3->setDateAccountCreated("2012-08-31");
        $objUser3->setTimeAccountCreated("02:01:02");

        $objUser->Save();
        $objUser2->Save();
        $objUser3->Save();
        
        echo "Información del Primer Usuario: <br />";
        echo "ID: " . $objUser->getID() . "<br />";
        echo "Nombre: " . $objUser->getFirstName() . "<br />";
        echo "Apellido: " . $objUser->getLastName() . "<br />";
        echo "Contraseña: " . $objUser->getUsername() . "<br />";
        echo "Nombre de Usuario: " . $objUser->getPassword() . "<br />";
        echo "Correo Electrónico: " . $objUser->getEmailAddress() . "<br />";
        echo "Fecha último inicio de sesión: " . $objUser->getDateLastLogin() . "<br />";
        echo "Hora último inicio de sesión: " . $objUser->getTimeLastLogin() . "<br />";
        echo "Fecha de creación de cuenta: " . $objUser->getDateAccountCreated() . "<br />";
        echo "Hora de creación de cuenta: " . $objUser->getTimeAccountCreated() . "<br/><br/>";
        

        echo "Información del Segundo Usuario: <br />";
        echo "ID: " . $objUser2->getID() . "<br />";
        echo "Nombre: " . $objUser2->getFirstName() . "<br />";
        echo "Apellido: " . $objUser2->getLastName() . "<br />";
        echo "Contraseña: " . $objUser2->getUsername() . "<br />";
        echo "Nombre de Usuario: " . $objUser2->getPassword() . "<br />";
        echo "Correo Electrónico: " . $objUser2->getEmailAddress() . "<br />";
        echo "Fecha último inicio de sesión: " . $objUser2->getDateLastLogin() . "<br />";
        echo "Hora último inicio de sesión: " . $objUser2->getTimeLastLogin() . "<br />";
        echo "Fecha de creación de cuenta: " . $objUser2->getDateAccountCreated() . "<br />";
        echo "Hora de creación de cuenta: " . $objUser2->getTimeAccountCreated() . "<br/><br/>";
        
        echo "Información del Tercer Usuario: <br />";
        echo "ID: " . $objUser3->getID() . "<br />";
        echo "Nombre: " . $objUser3->getFirstName() . "<br />";
        echo "Apellido: " . $objUser3->getLastName() . "<br />";
        echo "Contraseña: " . $objUser3->getUsername() . "<br />";
        echo "Nombre de Usuario: " . $objUser3->getPassword() . "<br />";
        echo "Correo Electrónico: " . $objUser3->getEmailAddress() . "<br />";
        echo "Fecha último inicio de sesión: " . $objUser3->getDateLastLogin() . "<br />";
        echo "Hora último inicio de sesión: " . $objUser3->getTimeLastLogin() . "<br />";
        echo "Fecha de creación de cuenta: " . $objUser3->getDateAccountCreated() . "<br />";
        echo "Hora de creación de cuenta: " . $objUser3->getTimeAccountCreated() . "<br/><br/>";
        
        $objUser->MarkForDeletion();
	unset($objUser);

        $objUser2->MarkForDeletion();
	unset($objUser2);

        $objUser3->MarkForDeletion();
	unset($objUser3);

