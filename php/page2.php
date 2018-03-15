<?php
include 'header.php';
?>
<section class="section-2">
    <h2>Créez vos équipes</h2>
    <form action="" method="post">
        <div class="display-heros">
            <h3>Les Héros</h3>
            <div>
                <div>
                    <h4>Personnage 1:</h4>
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" />
                    <label for="type">Type : </label>
                    <select id="type">
                        <option value="Magicien">Magicien</option> 
                        <option value="Elfe" selected>Elfe</option>
                        <option value="guerrier">guerrier</option>
                        <option value="nain">nain</option>
                    </select>  
                </div>
                <div>
                    <h4>Personnage 2:</h4>
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" />
                    <label for="type">Type : </label>
                    <select id="type">
                        <option value="Magicien">Magicien</option> 
                        <option value="Elfe" selected>Elfe</option>
                        <option value="guerrier">guerrier</option>
                        <option value="nain">nain</option>
                    </select>  
                </div>
                <div>
                    <h4>Personnage 3:</h4>
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" />
                    <label for="type">Type : </label>
                    <select id="type">
                        <option value="Magicien">Magicien</option> 
                        <option value="Elfe" selected>Elfe</option>
                        <option value="guerrier">guerrier</option>
                        <option value="nain">nain</option>
                    </select>  
                </div>
            </div> 
        </div>  
        <div class="display-monsters">  
            <div>
                <h3>Les Monstres</h3>
                <div>
                    <h4>Personnage 1:</h4>
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" />
                    <label for="type">Type : </label>
                    <select id="type">
                        <option value="Magicien-noir">Magicien-noir</option> 
                        <option value="orque" selected>orque</option>
                        <option value="gobelin ">gobelin</option>
                        <option value="ombre-noire">ombre-noire</option>
                        <option value="sauron">sauron</option>

                    </select>  
                </div>
                <div>
                    <h4>Personnage 2:</h4>
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" />
                    <label for="type">Type : </label>
                    <select id="type">
                        <option value="Magicien-noir">Magicien-noir</option> 
                        <option value="orque" selected>orque</option>
                        <option value="gobelin ">gobelin</option>
                        <option value="ombre-noire">ombre-noire</option>
                        <option value="sauron">sauron</option>

                    </select>  
                </div>
                <div>
                    <h4>Personnage 3:</h4>
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" />
                    <label for="type">Type : </label>
                    <select id="type">
                        <option value="Magicien-noir">Magicien-noir</option> 
                        <option value="orque" selected>orque</option>
                        <option value="gobelin ">gobelin</option>
                        <option value="ombre-noire">ombre-noire</option>
                        <option value="sauron">sauron</option>

                    </select>  
                </div>
            </div>       
        </div>   
        <div class="button">
            <button type="submit">Envoyer votre message</button>
        </div>
    </form>	
</section>
<?php
include 'footer.php';
?>