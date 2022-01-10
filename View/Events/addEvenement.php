<?php
require_once '../../utils/common.php';

session_start();
noMagicQuotes();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
    <title>login</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../../js/gestion.js"></script>
    <script src="mortifierEvent.js"></script>
    <script src="checkForm.js"></script>


</head>
<body class="p-8"> 
<h1 class="md:font-bold mb-8">Ajouter un événement</h1> 
<div id="addEvenementForm">
    <form action="../../Controller/Evenement/addEvenement.php" onsubmit="return chkinput(this)" method="POST" enctype ="multipart/form-data">
        <fieldset>

        <div class="col-span-6 sm:col-span-3 md:font-bold mb-8">
                  <label for="titre" class="block text-sm font-medium text-gray-700">Nom d'utilisateur<span class="text-[#E4DE4B]">*</span></label>
                  <input  name="titre" type="text" value=""  autocomplete="family-name" class="mt-1 focus:ring-[#E4DE4B] focus:border-[#E4DE4B] block w-full p-3 shadow-sm sm:text-sm border border-gray-300 rounded-md">
        </div>

        <div class="relative mb-8">
        <label for="dateDebutEvenement" class="block text-sm font-medium text-gray-700">Date de début de l'évenement :<span class="text-[#E4DE4B]">*</span></label>
            <input name="dateDebutEvenement" type="date" value=""  datepicker type="text" class="border border-gray-300  sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500 text text-dark" placeholder="Select date">
        </div>

        <div class="relative mb-8">
        <label for="dateFinEvenement" class="block text-sm font-medium text-gray-700">Date de début de l'évenement :<span class="text-[#E4DE4B]">*</span></label>
            <input name="dateFinEvenement" type="date" value=""  datepicker type="text" class="border border-gray-300  sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500 text text-dark" placeholder="Select date">
        </div>

        <div class="col-span-6 sm:col-span-3 md:font-bold mb-8">
                  <label for="titre" class="block text-sm font-medium text-gray-700">Ville de l'évenement<span class="text-[#E4DE4B]">*</span></label>
                  <input  name="ville" type="text" value=""  autocomplete="family-name" class="mt-1 focus:ring-[#E4DE4B] focus:border-[#E4DE4B] block w-full p-3 shadow-sm sm:text-sm border border-gray-300 rounded-md">
        </div>

        <div class="col-span-6 sm:col-span-3 md:font-bold mb-8">
                  <label for="contenu" class="block text-sm font-medium text-gray-700">Description de l'évenement<span class="text-[#E4DE4B]">*</span></label>
                  <textarea rows="10" cols="30" name="contenu" class="mt-1 focus:ring-[#E4DE4B] focus:border-[#E4DE4B] block w-full p-3 shadow-sm sm:text-sm border border-gray-300 rounded-md"> Veuillez taper la présentation</textarea>
        </div>

            <!-- <div class="content-img">
                <div class="file">
                    <i class="ico-plus"></i>télécharger le posteur, supporte le format : jpg/png
                    <input type="file" name="posteur" accept="image/*" id="upload" >
                </div>
            </div> -->
        
            <div class="col-span-6 sm:col-span-3 md:font-bold content-img mb-8">
                  <label for="username" class="block text-sm font-medium text-gray-700">Télécharger la couverture de l'évenement, supporte le format : jpg/png<span class="text-[#E4DE4B]">*</span></label>
                  <input type="file" name="posteur" accept="image/*" id="upload" class="block w-full text-sm text-gray-500
      file:mr-4 file:py-2 file:px-4
      file:rounded-full file:border-0
      file:text-sm file:font-semibold
      file:bg-violet-50 file:text-violet-700
      hover:file:bg-violet-100
    "/>
            </div>


        <div class="col-span-6 sm:col-span-3 md:font-bold">
                  <label for="contact" class="block text-sm font-medium text-gray-700">Contact<span class="text-[#E4DE4B]">*</span></label>
                  <input  name="contact" type="tel" value=""  autocomplete="family-name" class="mt-1 focus:ring-[#E4DE4B] focus:border-[#E4DE4B] block w-full p-3 shadow-sm sm:text-sm border border-gray-300 rounded-md">
        </div>
            

            <button type="submit" name="ok" value="1" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-[#2D2E35] hover:bg-[#E4DE4B] hover:text-[#2D2E35] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#2D2E35] mt-8">
                Créer un évenement
            </button>
        </fieldset>
    </form>
</div>