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

    <script src="checkForm.js"></script>
    <script>
        function addInput(){
            var input1 = document.createElement('input');
            input1.setAttribute('type', 'text');
            input1.setAttribute('name', 'lien_oeuvre[]');
            input1.setAttribute('class', 'oeuvre');

            var btn1 = document.getElementById("lien");
            btn1.insertBefore(input1,null);
        }
    </script>
</head>
<body class="p-8">
<h1 class="md:font-bold mb-8">Ajouter un artiste</h1> 
<div id="addArtisteForm">
    <form action="../../Controller/Artiste/addArtiste.php" method="POST" onsubmit="return chkinput(this)" enctype ="multipart/form-data">
        <fieldset>
            
            <div class="col-span-6 sm:col-span-3 md:font-bold mb-8">
                  <label for="username" class="block text-sm font-medium text-gray-700">Nom d'utilisateur<span class="text-[#E4DE4B]">*</span></label>
                  <input type="text" name="nom" type="text" value=""  autocomplete="family-name" class="mt-1 focus:ring-[#E4DE4B] focus:border-[#E4DE4B] block w-full p-3 shadow-sm sm:text-sm border border-gray-300 rounded-md">
            </div>

        
        <div class="col-span-6 sm:col-span-3 md:font-bold mb-8">
                  <label for="username" class="block text-sm font-medium text-gray-700">Type d'artiste<span class="text-[#E4DE4B]">*</span></label>
                  
            
            <select name="type_artiste" class="mt-1 focus:ring-[#E4DE4B] focus:border-[#E4DE4B] block w-full p-3 shadow-sm sm:text-sm border border-gray-300 rounded-md" >
                <option>Sélectionner un type</option>
                <option value="Designer">Designer</option>
                <option value="Photographiste">Photographiste</option>
                <option value="Musicien">Musicien</option>
            </select>
            </div>

            <!-- <div class="content-img">
                <div class="file">
                    <i class="ico-plus"></i>télécharger le profile, support la format : jpg/png
                    <input type="file" name="profile_artiste" accept="image/*" id="upload" >
                </div>
            </div> -->

            <div class="col-span-6 sm:col-span-3 md:font-bold mb-8">
                  <label for="username" class="block text-sm font-medium text-gray-700">Télécharger la photo de profile, supporte le format : jpg/png<span class="text-[#E4DE4B]">*</span></label>
                  <input type="file" name="profile_artiste" accept="image/*" id="upload"  class="block w-full text-sm text-gray-500
      file:mr-4 file:py-2 file:px-4
      file:rounded-full file:border-0
      file:text-sm file:font-semibold
      file:bg-violet-50 file:text-violet-700
      hover:file:bg-violet-100
    "/>
            </div>


            <div class="col-span-6 sm:col-span-3 md:font-bold mb-8">
                  <label for="username" class="block text-sm font-medium text-gray-700">Présentation de l'artiste<span class="text-[#E4DE4B]">*</span></label>
                  <textarea rows="10" cols="30" name="intro" class="mt-1 focus:ring-[#E4DE4B] focus:border-[#E4DE4B] block w-full p-3 shadow-sm sm:text-sm border border-gray-300 rounded-md"> Veuillez taper la présentation</textarea>
            </div>

            

            <div class="col-span-6 sm:col-span-3 md:font-bold mb-8">
                  <label for="username" class="block text-sm font-medium text-gray-700">Contact<span class="text-[#E4DE4B]">*</span></label>
                  <input type="text" name="contact" type="tel" value=""  autocomplete="family-name" class="mt-1 focus:ring-[#E4DE4B] focus:border-[#E4DE4B] block w-full p-3 shadow-sm sm:text-sm border border-gray-300 rounded-md">
            </div>




            <label for="username" class="block text-sm font-medium text-gray-700">Ajouter une oeuvre (plusieurs ajout) : <span class="text-[#E4DE4B]">*</span></label>
            <button class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-[#2D2E35] hover:bg-[#E4DE4B] hover:text-[#2D2E35] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#2D2E35]" type="button" onclick="addInput();" value="Ajouter une oeuvre" > Ajouter  </button>
            <div id="lien"></div>
            <br />

            <button type="submit" name="ok" value="1" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-[#2D2E35] hover:bg-[#E4DE4B] hover:text-[#2D2E35] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#2D2E35] mt-8">
                Créer un artiste
            </button>
        </fieldset>
    </form>
</div>