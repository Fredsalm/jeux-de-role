<?php
include 'header.php';
?>
<section class="section-2">
    <audio src="../song/selection.mp3" autoplay loop controls></audio>
    <div class="baniere"></div>
    <h2>Créez vos équipes</h2>
    <div class="border-equipe"></div>
    <div class="img-heros-monsters">
        <div class="heros">
            <div class="display-img">
                <!-- <a class="link-img" href="#"> -->
                    <div class="img-magicien img"></div>
                    <div class="back-img1"></div>
                    <!-- <div class="bulle">
                        <span>Force: 100 - 200</span>
                        <span>Points de vie: 400</span>
                        <span>Spécialité: Mage Noir</span>
                    </div> -->
                <!-- </a> -->
                <span class="name-img">Magicien</span>           
            </div>
            <div class="display-img">
                <div class="img-elf img"></div> 
                <span class="name-img">Elfe</span>
            </div>       
            <div class="display-img">
                <div class="img-guerrier img"></div>
                <span class="name-img">Guerrier</span>
            </div>  
            <div class="display-img"> 
                <div class="img-nain img"></div>
                <span class="name-img">Nain</span>
            </div>
        </div>
        <div class="monsters">
            <div class="display-img"> 
                <div class="img-magenoir img"></div>
                <span class="name-img">Mage Noir</span>
            </div>
            <div class="display-img"> 
                <div class="img-orc img"></div>
                <span class="name-img">Orque</span>
            </div>
            <div class="display-img">
                <div class="img-gobelin img"></div>
                <span class="name-img">Gobelin</span>
            </div>
            <div class="display-img">
                <div class="img-ombrenoir img"></div>
                <span class="name-img">Ombre Noir</span>
            </div>
            <div class="display-img">
                <div class="img-sauron img"></div>
                <span class="name-img">Sauron</span>
            </div>
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
                                <label for="nom-h1">Nom*:</label>
                                <input type="text" id="nom-h1" />
                            </div>
                            <div class="display-inlab">
                                <label for="type">Type*:</label>
                                <select name="h1" id="type-h1">
                                    <option value="Magicien">Magicien</option> 
                                    <option value="Elfe" selected>Elfe</option>
                                    <option value="guerrier">Guerrier</option>
                                    <option value="nain">Nain</option>
                                </select> 
                            </div>
                        </div> 
                    </div>
                    <div>
                        <h4>Personnage 2:</h4>
                        <div class="display-inlabf">
                            <div class="display-inlab">
                                <label for="nom-h2">Nom*:</label>
                                <input type="text" id="nom-h2" />
                            </div>
                            <div class="display-inlab">
                                <label for="type">Type*:</label>
                                <select name="h2" id="type-h2">
                                    <option value="Magicien">Magicien</option> 
                                    <option value="Elfe" selected>Elfe</option>
                                    <option value="guerrier">Guerrier</option>
                                    <option value="nain">Nain</option>
                                </select>
                            </div>
                        </div>  
                    </div>
                    <div>
                        <h4>Personnage 3:</h4>
                        <div class="display-inlabf">
                            <div class="display-inlab">
                                <label for="nom-h3">Nom*:</label>
                                <input type="text" id="nom-h3" />
                            </div>
                            <div class="display-inlab">
                                <label for="type">Type*:</label>
                                <select name="h3" id="type-h3">
                                    <option value="Magicien">Magicien</option> 
                                    <option value="Elfe" selected>Elfe</option>
                                    <option value="guerrier">Guerrier</option>
                                    <option value="nain">Nain</option>
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
                                <label for="nom-m1">Nom*:</label>
                                <input type="text" id="nom-m1" />
                            </div>
                            <div class="display-inlab">
                                <label for="type">Type*:</label>

                                <select name="m1" id="type-m1">
                                    <option value="Magicien-noir">Mage-noir</option> 
                                    <option value="orque" selected>orque</option>
                                    <option value="gobelin ">gobelin</option>
                                    <option value="ombre-noire">ombre-noire</option>
                                    <option value="sauron">sauron</option>
                                <select id="type">
                                    <option value="Magicien-noir">Mage Noir</option> 
                                    <option value="orque" selected>Orque</option>
                                    <option value="gobelin ">Gobelin</option>
                                    <option value="ombre-noire">Ombre Noire</option>
                                    <option value="sauron">Sauron</option>
                                </select>
                            </div>  
                        </div>
                    </div>
                    <div>
                        <h4>Personnage 2:</h4>
                        <div class="display-inlabf">
                            <div class="display-inlab">
                                <label for="nom-m2">Nom*:</label>
                                <input type="text" id="nom-m2" />
                            </div>
                            <div class="display-inlab">
                                <label for="type">Type*:</label>
                                <select name="m2" id="type-m2">
                                    <option value="Magicien-noir">Mage-noir</option> 
                                    <option value="orque" selected>orque</option>
                                    <option value="gobelin ">gobelin</option>
                                    <option value="ombre-noire">ombre-noire</option>
                                    <option value="sauron">sauron</option>
                                <select id="type">
                                    <option value="Magicien-noir">Mage Noir</option> 
                                    <option value="orque" selected>Orque</option>
                                    <option value="gobelin ">Gobelin</option>
                                    <option value="ombre-noire">Ombre Noire</option>
                                    <option value="sauron">Sauron</option>
                                </select> 
                            </div> 
                        </div>
                    </div>
                    <div>
                        <h4>Personnage 3:</h4>
                        <div class="display-inlabf">
                            <div class="display-inlab">
                                <label for="nom-m3">Nom*:</label>
                                <input type="text" id="nom-m3" />
                            </div>
                            <div class="display-inlab">
                                <label for="type">Type*:</label>
                                <select name="m3" id="type-m3">
                                    <option value="Magicien-noir">Mage-noir</option> 
                                    <option value="orque" selected>orque</option>
                                    <option value="gobelin ">gobelin</option>
                                    <option value="ombre-noire">ombre-noire</option>
                                    <option value="sauron">sauron</option>
                                <select id="type">
                                    <option value="Magicien-noir">Mage Noir</option> 
                                    <option value="orque" selected>Orque</option>
                                    <option value="gobelin ">Gobelin</option>
                                    <option value="ombre-noire">Ombre Noire</option>
                                    <option value="sauron">Sauron</option>
                                </select>
                            </div> 
                        </div> 
                    </div>
                </div>       
            </div>
        </div>       
        <div class="txt-btn">
            <p>Tous les champs munis d'une * sont obligatoires</p>
            <input class="btn-sub" type="submit" value="Commencer"/>
            <!-- <button class="btn-sub" type="submit">Commencer</button> -->
        </div>
    </form>
</section>
<?php
include 'footer.php';
?>