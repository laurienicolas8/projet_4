<?php ob_start();?>

<div class='row col-lg-12'>
    <div class='main col-lg-12'>
        <div class='edit_container col-lg-10'>
            <a href='./index.php?action=dashboardPosts' class='go_back'><i class="fas fa-arrow-left fa-2x"></i></a>
            <h1 class='edit_h1'>Editer un nouveau chapitre</h1>

            <form method="post" action='./index.php?action=addPost' id="edit_form">
                <div class='infos_and_labels'>
                    <label for='num' class='label'>Chapitre n° <span class='asterisque'>*</span> :</label>
                    <input type='text' required name='num' class='info_edit numPost'>
                </div>

                <div class='infos_and_labels'>
                    <label for='title' class='label'>Titre <span class='asterisque'>*</span> :</label>
                    <input type='text' required name='title' class='info_edit titlePost'>
                </div>

                <div class='infos_and_labels'>
                    <label for='excerpt' class='label'>Extrait visible <span class='asterisque'>*</span> :</label>
                    <textarea form='edit_form' name='excerpt' class='info_edit excerptPost'></textarea>
                </div>

                <div class='infos_and_labels'>
                    <label for='content' class='label'>Contenu <span class='asterisque'>*</span> :</label>
                    <textarea form='edit_form' name='content' class='info_edit contentPost'></textarea>
                    <script>
                        tinymce.init({
                        selector: 'textarea',
                        mode: 'exact',                       
                        });
                    </script>
                </div>
                <p><span class='asterisque'>*</span> : Champs obligatoires</p>

                <input type='submit' value='Enregistrer' class='option_button button_editPost'>
            </form>
        </div>
    </div>
</div>

<?php 
$content = ob_get_clean();
require('template_backend.php');
?>