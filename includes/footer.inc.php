           </div>
            <?php
              //include ('fonction.php');
              if (identification_cookie()==true){
             ?>
                <nav class="span4">
                <h3>Menu</h3>
            		<form method="GET" action="index.php">
            		   <input type="text" name="search" value=" mot recherché " onclick="this.value='';" /><br />
            		   <input type="submit" value="Rechercher Ici" name=""/>
                </form>
                <ul>
                  <li><a href="index.php">Accueil</a></li>
            			<li><a href="formulaire_article.php">Ajouter un article</a></li>
            			<li><a href="deconnexion.php">Deconnexion</a></li>
                </ul>
            <?php
              }else{
            ?>
                <nav class="span4">
                  <h3>Menu</h3>
              		<form method="GET" action="index.php">
              		  <input type="text" name="search" value=" mot recherché " onclick="this.value='';" /><br />
              			<input type="submit" value="Rechercher Ici" name=""/>
                  </form>
                  <ul>
                    <li><a href="index.php">Accueil</a></li>
              			<li><a href="index.php">Inscription</a></li>
              			<li><a href="connexion.php">Connexion</a></li>		
                  </ul>     
                </nav>
            		<?php
            		  }
            		  ?>
              </div>
          </div>
        <footer></footer>
      </div>
    </body>
  </html>
