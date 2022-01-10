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
    <script type="text/javascript" src="../../js/custom/utils.js"></script>
    <script src="../../js/custom/gallery.js"></script>

</head>
<body class="md:font-bold mb-8">
<h1 class="md:font-bold mb-8">Ajouter une photo</h1> 
<form action="" method="POST">
    <!-- <button type="button" onclick="afficheAddPhotoForm()">ajouter une photo</button> -->
    <!-- <button type="button" onclick="afficheAddPhotoForm()"  class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-[#2D2E35] hover:bg-[#E4DE4B] hover:text-[#2D2E35] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#2D2E35] mb-8"> -->
    </button>
</form>
<div >
    <form action="../../Controller/Gallery/addPhoto.php" method="POST" enctype ="multipart/form-data">
        <fieldset>

        <div class="col-span-6 sm:col-span-3 md:font-bold">
                  <label for="contact" class="block text-sm font-medium text-gray-700">Titre de la Photo :<span class="text-[#E4DE4B]">*</span></label>
                  <input  name="titrePhoto" type="text" value=""  autocomplete="family-name" class="mt-1 focus:ring-[#E4DE4B] focus:border-[#E4DE4B] block w-full p-3 shadow-sm sm:text-sm border border-gray-300 rounded-md mb-8">
        </div>
            <!-- Titre de la Photo : <input name="titrePhoto" type="text" value="" />* <br /> -->
            <!-- <div class="content-img">
                <div class="file">
                    <i class="ico-plus"></i>télécharger la photo, support la format : jpg/png
                    <input type="file" name="photo" accept="image/*" id="upload" >
                </div>
            </div> -->

            <div class="col-span-6 sm:col-span-3 md:font-bold content-img ">
                  <label for="username" class="block text-sm font-medium text-gray-700">Télécharger la photo, supporte le format : jpg/png<span class="text-[#E4DE4B]">*</span></label>
                  <input type="file" name="photo" accept="image/*" id="upload" class="block w-full text-sm text-gray-500
      file:mr-4 file:py-2 file:px-4
      file:rounded-full file:border-0
      file:text-sm file:font-semibold
      file:bg-violet-50 file:text-violet-700
      hover:file:bg-violet-100
    "/>
            </div>

            <div id="lien"></div>
            <br />

            <!-- <button type="submit" name="ok" value="1">Ajouter une photo</button> -->
            <button type="submit" name="ok" value="1" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-[#2D2E35] hover:bg-[#E4DE4B] hover:text-[#2D2E35] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#2D2E35]">
                Ajouter la photo
            </button>
        </fieldset>
    </form>
</div>