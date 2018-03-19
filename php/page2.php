<?php
include 'header.php';
?>
<section class="section-2">
    <audio src="../song/selection.mp3" autoplay loop></audio>
    <div class="baniere"></div>
    <h2>Créez vos équipes</h2>
    <div class="border-equipe"></div>
    <div class="img-heros-monsters">
        <div class="heros">
            <div class="img-magicien img"></div>
            <div class="img-elf img"></div>        
            <div class="img-guerrier img"></div>
            <div class="img-nain img"></div>
        </div>
        <div class="monsters">
            <div class="img-magenoir img"></div>
            <div class="img-orc img"></div>
            <div class="img-gobelin img"></div>
            <div class="img-ombrenoir img"></div>
            <div class="img-sauron img"></div>
        </div>
    </div>
    <form action="http://localhost:8888/php/page3.php" method="post">
        <div class="display-form">
            <div class="display-heros">
                <h3>Les Héros</h3>                
                <div>
                    <div>
                        <h4>Personnage 1:</h4>
                        <div class="display-inlabf">
                            <div class="display-inlab">
                                <label for="nom">Nom*:</label>
                                <input type="text" id="nom" />
                            </div>
                            <div class="display-inlab">
                                <label for="type">Type*:</label>
                                <select id="type">
                                    <option value="Magicien">Magicien</option> 
                                    <option value="Elfe" selected>Elfe</option>
                                    <option value="guerrier">guerrier</option>
                                    <option value="nain">nain</option>
                                </select> 
                            </div>
                        </div> 
                    </div>
                    <div>
                        <h4>Personnage 2:</h4>
                        <div class="display-inlabf">
                            <div class="display-inlab">
                                <label for="nom">Nom*:</label>
                                <input type="text" id="nom" />
                            </div>
                            <div class="display-inlab">
                                <label for="type">Type*:</label>
                                <select id="type">
                                    <option value="Magicien">Magicien</option> 
                                    <option value="Elfe" selected>Elfe</option>
                                    <option value="guerrier">guerrier</option>
                                    <option value="nain">nain</option>
                                </select>
                            </div>
                        </div>  
                    </div>
                    <div>
                        <h4>Personnage 3:</h4>
                        <div class="display-inlabf">
                            <div class="display-inlab">
                                <label for="nom">Nom*:</label>
                                <input type="text" id="nom" />
                            </div>
                            <div class="display-inlab">
                                <label for="type">Type*:</label>
                                <select id="type">
                                    <option value="Magicien">Magicien</option> 
                                    <option value="Elfe" selected>Elfe</option>
                                    <option value="guerrier">guerrier</option>
                                    <option value="nain">nain</option>
                                </select>
                            </div> 
                        </div> 
                    </div>
                </div> 
            </div>  
            <div class="display-monsters">  
                <div>
                    <h3>Les Monstres</h3>
                    <div>
                        <h4>Personnage 1:</h4>
                        <div class="display-inlabf">
                            <div class="display-inlab">
                                <label for="nom">Nom*:</label>
                                <input type="text" id="nom" />
                            </div>
                            <div class="display-inlab">
                                <label for="type">Type*:</label>
                                <select id="type">
                                    <option value="Magicien-noir">Mage-noir</option> 
                                    <option value="orque" selected>orque</option>
                                    <option value="gobelin ">gobelin</option>
                                    <option value="ombre-noire">ombre-noire</option>
                                    <option value="sauron">sauron</option>
                                </select>
                            </div>  
                        </div>
                    </div>
                    <div>
                        <h4>Personnage 2:</h4>
                        <div class="display-inlabf">
                            <div class="display-inlab">
                                <label for="nom">Nom*:</label>
                                <input type="text" id="nom" />
                            </div>
                            <div class="display-inlab">
                                <label for="type">Type*:</label>
                                <select id="type">
                                    <option value="Magicien-noir">Mage-noir</option> 
                                    <option value="orque" selected>orque</option>
                                    <option value="gobelin ">gobelin</option>
                                    <option value="ombre-noire">ombre-noire</option>
                                    <option value="sauron">sauron</option>
                                </select> 
                            </div> 
                        </div>
                    </div>
                    <div>
                        <h4>Personnage 3:</h4>
                        <div class="display-inlabf">
                            <div class="display-inlab">
                                <label for="nom">Nom*:</label>
                                <input type="text" id="nom" />
                            </div>
                            <div class="display-inlab">
                                <label for="type">Type*:</label>
                                <select id="type">
                                    <option value="Magicien-noir">Mage-noir</option> 
                                    <option value="orque" selected>orque</option>
                                    <option value="gobelin ">gobelin</option>
                                    <option value="ombre-noire">ombre-noire</option>
                                    <option value="sauron">sauron</option>
                                </select>
                            </div> 
                        </div> 
                    </div>
                </div>       
            </div>
        </div>       
        <div class="txt-btn">
            <p>Tous les champs munis d'une*sont obligatoires</p>
            <input class="btn-sub" type="submit" valaur="Commencer"/>
            <!-- <button class="btn-sub" type="submit">Commencer</button> -->
        </div>
    </form>
</section>
<?php
include 'footer.php';
?>