<?php ob_start();?>

<div class='row col-lg-12'>
    <div class='main col-lg-12'>
        <div class='edit_container col-lg-10'>
            <a href='./index.php?action=dashboardPosts' class='go_back'><i class="fas fa-arrow-left fa-2x"></i></a>
            <h1 class='edit_h1'>Modifier le chapitre</h1>

            <?php while ($post = $onePost->fetch()) { ?>
                <form method="post" id="edit_form" <?='action="./index.php?action=modifPost&idPost='.$post->id.'"'?> >
                <div class='infos_and_labels'>
                    <label for='num' class='label'>Chapitre n° <span class='asterisque'>*</span> :</label>
                    <input type='text' required name='num' class='info_edit numPost' value=<?=$post->num?>>
                </div>

                <div class='infos_and_labels'>
                    <label for='title' class='label'>Titre <span class='asterisque'>*</span> :</label>
                    <input type='text' required name='title' class='info_edit titlePost' value=<?=$post->title?>>
                </div>

                <div class='infos_and_labels'>
                    <label for='excerpt' class='label'>Extrait visible <span class='asterisque'>*</span> :</label>
                    <textarea form='edit_form' name='excerpt' class='info_edit excerptPost'><?=$post->excerpt?></textarea>
                </div>

                <div class='infos_and_labels'>
                    <label for='content' class='label'>Contenu <span class='asterisque'>*</span> :</label>
                    <textarea form='edit_form' name='content' class='info_edit contentPost'><?=$post->content?></textarea>
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
            }
$content = ob_get_clean();
require('template_backend.php');
?>