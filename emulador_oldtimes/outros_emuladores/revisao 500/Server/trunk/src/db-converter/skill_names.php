<?

$file = 'skill_db.txt';
$skill = file_get_contents($file);

$skill = str_replace('NV_BASIC#Basic Skill#','NV_BASIC#Habilidades_B�sicas#',$skill);
$skill = str_replace('SM_SWORD#Sword Mastery#','SM_SWORD#Per�cia_com_Espada#',$skill);
$skill = str_replace('SM_TWOHAND#Two-Handed Sword Mastery#','SM_TWOHAND#Per�cia_com_Espada_de_Duas_M�os#',$skill);
$skill = str_replace('SM_RECOVERY#Increase HP Recovery#','SM_RECOVERY#Aumentar_Recupera��o_de_HP#',$skill);
$skill = str_replace('SM_BASH#Bash#','SM_BASH#Golpe_Fulminante#',$skill);
$skill = str_replace('SM_PROVOKE#Provoke#','SM_PROVOKE#Provocar#',$skill);
$skill = str_replace('SM_MAGNUM#Magnum Break#','SM_MAGNUM#Impacto_Explosivo#',$skill);
$skill = str_replace('SM_ENDURE#Endure#','SM_ENDURE#Vigor#',$skill);
$skill = str_replace('MG_SRECOVERY#Increase SP Recovery#','MG_SRECOVERY#Aumentar_Recupera��o_de_SP#',$skill);
$skill = str_replace('MG_SIGHT#Sight#','MG_SIGHT#Chama_Reveladora#',$skill);
$skill = str_replace('MG_NAPALMBEAT#Napalm Beat#','MG_NAPALMBEAT#Ataque_Espiritual#',$skill);
$skill = str_replace('MG_SAFETYWALL#Safety Wall#','MG_SAFETYWALL#Escudo_M�gico#',$skill);
$skill = str_replace('MG_SOULSTRIKE#Soul Strike#','MG_SOULSTRIKE#Esp�ritos_Anci�es#',$skill);
$skill = str_replace('MG_COLDBOLT#Cold Bolt#','MG_COLDBOLT#Lan�as_de_Gelo#',$skill);
$skill = str_replace('MG_FROSTDIVER#Frost Diver#','MG_FROSTDIVER#Rajada_Congelante#',$skill);
$skill = str_replace('MG_STONECURSE#Stone Curse#','MG_STONECURSE#Petrificar#',$skill);
$skill = str_replace('MG_FIREBALL#Fire Ball#','MG_FIREBALL#Bolas_de_Fogo#',$skill);
$skill = str_replace('MG_FIREWALL#Fire Wall#','MG_FIREWALL#Barreira_de_Fogo#',$skill);
$skill = str_replace('MG_FIREBOLT#Fire Bolt#','MG_FIREBOLT#Lan�as_de_Fogo#',$skill);
$skill = str_replace('MG_LIGHTNINGBOLT#Lightning Bolt#','MG_LIGHTNINGBOLT#Rel�mpago#',$skill);
$skill = str_replace('MG_THUNDERSTORM#Thunderstorm#','MG_THUNDERSTORM#Tempestade_de_Raios#',$skill);
$skill = str_replace('AL_DP#Divine protection#','AL_DP#Prote��o_Divina#',$skill);
$skill = str_replace('AL_DEMONBANE#Demon Bane#','AL_DEMONBANE#Flagelo_do_Mal#',$skill);
$skill = str_replace('AL_RUWACH#Ruwach#','AL_RUWACH#Revela��o#',$skill);
$skill = str_replace('AL_PNEUMA#Pneuma#','AL_PNEUMA#Escudo_Sagrado#',$skill);
$skill = str_replace('AL_TELEPORT#Teleport#','AL_TELEPORT#Teleporte#',$skill);
$skill = str_replace('AL_WARP#Warp Portal#','AL_WARP#Portal#',$skill);
$skill = str_replace('AL_HEAL#Heal#','AL_HEAL#Curar#',$skill);
$skill = str_replace('AL_INCAGI#Increase AGI#','AL_INCAGI#Aumentar_Agilidade#',$skill);
$skill = str_replace('AL_DECAGI#Decrease AGI#','AL_DECAGI#Diminuir_Agilidade#',$skill);
$skill = str_replace('AL_HOLYWATER#Aqua Benedicta#','AL_HOLYWATER#Aqua_Benedicta#',$skill);
$skill = str_replace('AL_CRUCIS#Signum Crusis#','AL_CRUCIS#Signum_Crusis#',$skill);
$skill = str_replace('AL_ANGELUS#Angelus#','AL_ANGELUS#Angelus#',$skill);
$skill = str_replace('AL_BLESSING#Blessing#','AL_BLESSING#Ben��o#',$skill);
$skill = str_replace('AL_CURE#Cure#','AL_CURE#Medicar#',$skill);
$skill = str_replace('MC_INCCARRY#Enlarge Weight Limit#','MC_INCCARRY#Aumentar_Capacidade_de_Carga#',$skill);
$skill = str_replace('MC_DISCOUNT#Discount#','MC_DISCOUNT#Desconto#',$skill);
$skill = str_replace('MC_OVERCHARGE#Overcharge#','MC_OVERCHARGE#Superfaturar#',$skill);
$skill = str_replace('MC_PUSHCART#Pushcart#','MC_PUSHCART#Usar_Carrinho#',$skill);
$skill = str_replace('MC_IDENTIFY#Item Appraisal#','MC_IDENTIFY#Identificar_Item#',$skill);
$skill = str_replace('MC_VENDING#Vending#','MC_VENDING#Com�rcio#',$skill);
$skill = str_replace('MC_MAMMONITE#Mammonite#','MC_MAMMONITE#Mammonita#',$skill);
$skill = str_replace("AC_OWL#Owl's Eye#","AC_OWL#Precis�o#",$skill);
$skill = str_replace("AC_VULTURE#Vulture's Eye#","AC_VULTURE#Olhos_de_�guia#",$skill);
$skill = str_replace('AC_CONCENTRATION#Improve Concentration#','AC_CONCENTRATION#Concentra��o#',$skill);
$skill = str_replace('AC_DOUBLE#Double Strafe#','AC_DOUBLE#Rajada_de_Flechas#',$skill);
$skill = str_replace('AC_SHOWER#Arrow Shower#','AC_SHOWER#Chuva_de_Flechas#',$skill);
$skill = str_replace('TF_DOUBLE#Double Attack#','TF_DOUBLE#Ataque_Duplo#',$skill);
$skill = str_replace('TF_MISS#Improve Dodge#','TF_MISS#Per�cia_em_Esquiva#',$skill);
$skill = str_replace('TF_STEAL#Steal#','TF_STEAL#Furto#',$skill);
$skill = str_replace('TF_HIDING#Hiding#','TF_HIDING#Esconderijo#',$skill);
$skill = str_replace('TF_POISON#Envenom#','TF_POISON#Envenenar#',$skill);
$skill = str_replace('TF_DETOXIFY#Detoxify#','TF_DETOXIFY#Desintoxicar#',$skill);
$skill = str_replace('ALL_RESURRECTION#Resurrection#','ALL_RESURRECTION#Ressuscitar#',$skill);
$skill = str_replace('KN_SPEARMASTERY#Spear Mastery#','KN_SPEARMASTERY#Per�cia_com_Lan�a#',$skill);
$skill = str_replace('KN_PIERCE#Pierce#','KN_PIERCE#Perfurar#',$skill);
$skill = str_replace('KN_BRANDISHSPEAR#Brandish Spear#','KN_BRANDISHSPEAR#Brandir_Lan�a#',$skill);
$skill = str_replace('KN_SPEARSTAB#Spear Stab#','KN_SPEARSTAB#Estocada#',$skill);
$skill = str_replace('KN_SPEARBOOMERANG#Spear Boomerang#','KN_SPEARBOOMERANG#Lan�a_Bumerangue#',$skill);
$skill = str_replace('KN_TWOHANDQUICKEN#Twohand Quicken#','KN_TWOHANDQUICKEN#Rapidez_com_Duas_M�os#',$skill);
$skill = str_replace('KN_AUTOCOUNTER#Counter Attack#','KN_AUTOCOUNTER#Contra-Ataque#',$skill);
$skill = str_replace('KN_BOWLINGBASH#Bowling Bash#','KN_BOWLINGBASH#Impacto_de_Tyr#',$skill);
$skill = str_replace('KN_RIDING#Peco Peco Riding#','KN_RIDING#Montaria#',$skill);
$skill = str_replace('KN_CAVALIERMASTERY#Cavalier Mastery#','KN_CAVALIERMASTERY#Per�cia_em_Montaria#',$skill);
$skill = str_replace('PR_MACEMASTERY#Mace Mastery#','PR_MACEMASTERY#Per�cia_com_Ma�a#',$skill);
$skill = str_replace('PR_IMPOSITIO#Impositio Manus#','PR_IMPOSITIO#Impositio_Manus#',$skill);
$skill = str_replace('PR_SUFFRAGIUM#Suffragium#','PR_SUFFRAGIUM#Suffragium#',$skill);
$skill = str_replace('PR_ASPERSIO#Aspersio#','PR_ASPERSIO#Aspersio#',$skill);
$skill = str_replace('PR_BENEDICTIO#B.S Sacramenti#','PR_BENEDICTIO#B.S_Sacramenti#',$skill);
$skill = str_replace('PR_SANCTUARY#Sanctuary#','PR_SANCTUARY#Santu�rio#',$skill);
$skill = str_replace('PR_SLOWPOISON#Slow Poison#','PR_SLOWPOISON#Retardar_Veneno#',$skill);
$skill = str_replace('PR_STRECOVERY#Status Recovery#','PR_STRECOVERY#Gra�a_Divina#',$skill);
$skill = str_replace('PR_KYRIE#Kyrie Eleison#','PR_KYRIE#Kyrie_Eleison#',$skill);
$skill = str_replace('PR_MAGNIFICAT#Magnificat#','PR_MAGNIFICAT#Magnificat#',$skill);
$skill = str_replace('PR_GLORIA#Gloria#','PR_GLORIA#Gloria#',$skill);
$skill = str_replace('PR_LEXDIVINA#Lex Divina#','PR_LEXDIVINA#Lex_Divina#',$skill);
$skill = str_replace('PR_TURNUNDEAD#Turn Undead#','PR_TURNUNDEAD#Esconjurar#',$skill);
$skill = str_replace('PR_LEXAETERNA#Lex Aeterna#','PR_LEXAETERNA#Lex_Aeterna#',$skill);
$skill = str_replace('PR_MAGNUS#Magnus Exorcismus#','PR_MAGNUS#Magnus_Exorcismus#',$skill);
$skill = str_replace('WZ_FIREPILLAR#Fire Pillar#','WZ_FIREPILLAR#Coluna_de_Fogo#',$skill);
$skill = str_replace('WZ_SIGHTRASHER#Sightrasher#','WZ_SIGHTRASHER#Supernova#',$skill);
$skill = str_replace('WZ_FIREIVY#Fire Ivy#','WZ_FIREIVY#Hera_de_Fogo#',$skill);
$skill = str_replace('WZ_METEOR#Meteor Storm#','WZ_METEOR#Chuva_de_Meteoros#',$skill);
$skill = str_replace('WZ_JUPITEL#Jupiter Thunder#','WZ_JUPITEL#Trov�o_de_J�piter#',$skill);
$skill = str_replace('WZ_VERMILION#Lord of Vermilion#','WZ_VERMILION#Ira_de_Thor#',$skill);
$skill = str_replace("WZ_WATERBALL#Water Ball#","WZ_WATERBALL#Esfera_d'�gua#",$skill);
$skill = str_replace('WZ_ICEWALL#Ice Wall#','WZ_ICEWALL#Barreira_de_Gelo#',$skill);
$skill = str_replace('WZ_FROSTNOVA#Frost Nova#','WZ_FROSTNOVA#Congelar#',$skill);
$skill = str_replace('WZ_STORMGUST#Storm Gust#','WZ_STORMGUST#Nevasca#',$skill);
$skill = str_replace('WZ_EARTHSPIKE#Earth Spike#','WZ_EARTHSPIKE#Coluna_de_Pedra#',$skill);
$skill = str_replace("WZ_HEAVENDRIVE#Heaven's Drive#","WZ_HEAVENDRIVE#F�ria_da_Terra#",$skill);
$skill = str_replace('WZ_QUAGMIRE#Quagmire#','WZ_QUAGMIRE#P�ntano_dos_Mortos#',$skill);
$skill = str_replace('WZ_ESTIMATION#Sense#','WZ_ESTIMATION#Sentido_Sobrenatural#',$skill);
$skill = str_replace('BS_IRON#Iron Tempering#','BS_IRON#Trabalhar_Ferro#',$skill);
$skill = str_replace('BS_STEEL#Steel Tempering#','BS_STEEL#Trabalhar_A�o#',$skill);
$skill = str_replace('BS_ENCHANTEDSTONE#Enchanted Stone Craft#','BS_ENCHANTEDSTONE#Produzir_Pedra_Fundamental#',$skill);
$skill = str_replace('BS_ORIDECON#Oridecon Research#','BS_ORIDEOCON#Per�cia_com_Oridecon#',$skill);
$skill = str_replace('BS_DAGGER#Smith Dagger#','BS_DAGGER#Forjar_Adaga#',$skill);
$skill = str_replace('BS_SWORD#Smith Sword#','BS_SWORD#Forjar_Espada#',$skill);
$skill = str_replace('BS_TWOHANDSWORD#Smith Two-handed Sword#','BS_TWOHANDSWORD#Forjar_Espada_de_Duas_M�os#',$skill);
$skill = str_replace('BS_AXE#Smith Axe#','BS_AXE#Forjar_Machado#',$skill);
$skill = str_replace('BS_MACE#Smith Mace#','BS_MACE#Forjar_Ma�a#',$skill);
$skill = str_replace('BS_KNUCKLE#Smith Knucklebrace#','BS_KNUCKLE#Forjar_Soqueira#',$skill);
$skill = str_replace('BS_SPEAR#Smith Spear#','BS_SPEAR#Forjar_Lan�a#',$skill);
$skill = str_replace('BS_HILTBINDING#Hilt Binding#','BS_HILTBINDING#Punho_Firme#',$skill);
$skill = str_replace('BS_FINDINGORE#Ore Discovery#','BS_FINDINGORE#Encontrar_Min�rio#',$skill);
$skill = str_replace('BS_WEAPONRESEARCH#Weaponry Research#','BS_WEAPONRESEARCH#Per�cia_em_Armamento#',$skill);
$skill = str_replace('BS_REPAIRWEAPON#Weapon Repair#','BS_REPAIRWEAPON#Consertar_Armas#',$skill);
$skill = str_replace('BS_SKINTEMPER#Skin Tempering#','BS_SKINTEMPER#Resist�ncia_ao_Fogo#',$skill);
$skill = str_replace('BS_HAMMERFALL#Hammer Fall#','BS_HAMMERFALL#Martelo_de_Thor#',$skill);
$skill = str_replace('BS_ADRENALINE#Adrenaline Rush#','BS_ADRENALINE#Adrenalina_Pura#',$skill);
$skill = str_replace('BS_WEAPONPERFECT#Weapon Perfection#','BS_WEAPONPERFECT#Manejo_Perfeito#',$skill);
$skill = str_replace('BS_OVERTHRUST#Power-Thrust#','BS_OVERTHRUST#For�a_Violenta#',$skill);
$skill = str_replace('BS_MAXIMIZE#Maximize Power#','BS_MAXIMIZE#Amplificar_Poder#',$skill);
$skill = str_replace('HT_SKIDTRAP#Skid Trap#','HT_SKIDTRAP#Armadilha_Escorregadia#',$skill);
$skill = str_replace('HT_LANDMINE#Land Mine#','HT_LANDMINE#Armadilha_Atordoante#',$skill);
$skill = str_replace('HT_ANKLESNARE#Ankle Snare#','HT_ANKLESNARE#Instalar_Armadilha#',$skill);
$skill = str_replace('HT_SHOCKWAVE#Shockwave Trap#','HT_SHOCKWAVE#Armadilha_Extenuante#',$skill);
$skill = str_replace('HT_SANDMAN#Sandman#','HT_SANDMAN#Armadilha_Son�fera#',$skill);
$skill = str_replace('HT_FLASHER#Flasher#','HT_FLASHER#Armadilha_Luminosa#',$skill);
$skill = str_replace('HT_FREEZINGTRAP#Freezing Trap#','HT_FREEZINGTRAP#Armadilha_Congelante#',$skill);
$skill = str_replace('HT_BLASTMINE#Blast Mine#','HT_BLASTMINE#Instalar_Mina#',$skill);
$skill = str_replace('HT_CLAYMORETRAP#Claymore Trap#','HT_CLAYMORETRAP#Armadilha_Explosiva#',$skill);
$skill = str_replace('HT_REMOVETRAP#Remove Trap#','HT_REMOVETRAP#Remover_Armadilha#',$skill);
$skill = str_replace('HT_TALKIEBOX#Talkie Box#','HT_TALKIEBOX#Mensagem_Secreta#',$skill);
$skill = str_replace('HT_BEASTBANE#Beast Bane#','HT_BEASTBANE#Flagelo_das_Feras#',$skill);
$skill = str_replace('HT_FALCON#Falconry Mastery#','HT_FALCON#Adestrar_Falc�o#',$skill);
$skill = str_replace('HT_STEELCROW#Steel Crow#','HT_STEELCROW#Garras_de_A�o#',$skill);
$skill = str_replace('HT_BLITZBEAT#Blitz Beat#','HT_BLITZBEAT#Ataque_A�reo#',$skill);
$skill = str_replace('HT_DETECTING#Detect#','HT_DETECTING#Alerta#',$skill);
$skill = str_replace('HT_SPRINGTRAP#Spring Trap#','HT_SPRINGTRAP#Desativar_Armadilha#',$skill);
$skill = str_replace('AS_RIGHT#Righthand Mastery#','AS_RIGHT#Per�cia_com_M�o_Direita#',$skill);
$skill = str_replace('AS_LEFT#Lefthand Mastery#','AS_LEFT#Per�cia_com_M�o_Esquerda#',$skill);
$skill = str_replace('AS_KATAR#Katar Mastery#','AS_KATAR#Per�cia_com_Katar#',$skill);
$skill = str_replace('AS_CLOAKING#Cloaking#','AS_CLOAKING#Furtividade#',$skill);
$skill = str_replace('AS_SONICBLOW#Sonic Blow#','AS_SONICBLOW#L�minas_Destruidoras#',$skill);
$skill = str_replace('AS_GRIMTOOTH#Grimtooth#','AS_GRIMTOOTH#Tocaia#',$skill);
$skill = str_replace('AS_ENCHANTPOISON#Enchant Poison#','AS_ENCHANTPOISON#Envenenar_Arma#',$skill);
$skill = str_replace('AS_POISONREACT#Poison React#','AS_POISONREACT#Refletir_Veneno#',$skill);
$skill = str_replace('AS_VENOMDUST#Venom Dust#','AS_VENOMDUST#N�voa_T�xica#',$skill);
$skill = str_replace('AS_SPLASHER#Venom Splasher#','AS_SPLASHER#Explos�o_T�xica#',$skill);
$skill = str_replace('NV_FIRSTAID#First Aid#','NV_FIRSTAID#Primeiros_Socorros#',$skill);
$skill = str_replace('NV_TRICKDEAD#Act Dead#','NV_TRICKDEAD#Fingir_de_Morto#',$skill);
$skill = str_replace('SM_MOVINGRECOVERY#Moving HP-Recovery#','SM_MOVINGRECOVERY#Recuperar_HP_em_Movimento#',$skill);
$skill = str_replace('SM_FATALBLOW#Attack Weak Point#','SM_FATALBLOW#Ataque_Fatal#',$skill);
$skill = str_replace('SM_AUTOBERSERK#Auto Berserk#','SM_AUTOBERSERK#Instinto_de_Sobreviv�ncia#',$skill);
$skill = str_replace('AC_MAKINGARROW#Arrow Crafting#','AC_MAKINGARROW#Fabricar_Flechas#',$skill);
$skill = str_replace('AC_CHARGEARROW#Arrow Repel#','AC_CHARGEARROW#Disparo_Violento#',$skill);
$skill = str_replace('TF_SPRINKLESAND#Throw Sand#','TF_SPRINKLESAND#Chutar_Areia#',$skill);
$skill = str_replace('TF_BACKSLIDING#Back Sliding#','TF_BACKSLIDING#Recuar#',$skill);
$skill = str_replace('TF_PICKSTONE#Find Stone#','TF_PICKSTONE#Procurar_Pedras#',$skill);
$skill = str_replace('TF_THROWSTONE#Stone Fling#','TF_THROWSTONE#Arremessar_Pedra#',$skill);
$skill = str_replace('MC_CARTREVOLUTION#Cart Revolution#','MC_CARTREVOLUTION#Cavalo-de-Pau#',$skill);
$skill = str_replace('MC_CHANGECART#Change Cart#','MC_CHANGECART#Personalizar_Carrinho#',$skill);
$skill = str_replace('MC_LOUD#Crazy Uproar#','MC_LOUD#Grito_de_Guerra#',$skill);
$skill = str_replace('AL_HOLYLIGHT#Holy Light#','AL_HOLYLIGHT#Luz_Divina#',$skill);
$skill = str_replace('MG_ENERGYCOAT#Energy Coat#','MG_ENERGYCOAT#Prote��o_Arcana#',$skill);
$skill = str_replace('NPC_PIERCINGATT#Thrusting attack#','NPC_PIERCINGATT#Thrusting attack#',$skill);
$skill = str_replace('NPC_MENTALBREAKER#Spirit Destruction#','NPC_MENTALBREAKER#Spirit Destruction#',$skill);
$skill = str_replace('NPC_RANGEATTACK#Stand off attack#','NPC_RANGEATTACK#Stand off attack#',$skill);
$skill = str_replace('NPC_ATTRICHANGE#Run Attribute Change#','NPC_ATTRICHANGE#Run Attribute Change#',$skill);
$skill = str_replace('NPC_CHANGEWATER#Water Attribute Change#','NPC_CHANGEWATER#Water Attribute Change#',$skill);
$skill = str_replace('NPC_CHANGEGROUND#Earth Attribute Change#','NPC_CHANGEGROUND#Earth Attribute Change#',$skill);
$skill = str_replace('NPC_CHANGEFIRE#Fire Attribute Change#','NPC_CHANGEFIRE#Fire Attribute Change#',$skill);
$skill = str_replace('NPC_CHANGEWIND#Wind Attribute Change#','NPC_CHANGEWIND#Wind Attribute Change#',$skill);
$skill = str_replace('NPC_CHANGEPOISON#Poison Attribute Change#','NPC_CHANGEPOISON#Poison Attribute Change#',$skill);
$skill = str_replace('NPC_CHANGEHOLY#Holy Attribute Change#','NPC_CHANGEHOLY#Holy Attribute Change#',$skill);
$skill = str_replace('NPC_CHANGEDARKNESS#Shadow Attribute Change#','NPC_CHANGEDARKNESS#Shadow Attribute Change#',$skill);
$skill = str_replace('NPC_CHANGETELEKINESIS#Sense Attribute Change#','NPC_CHANGETELEKINESIS#Sense Attribute Change#',$skill);
$skill = str_replace('NPC_CRITICALSLASH#Defense disregard attack#','NPC_CRITICALSLASH#Defense disregard attack#',$skill);
$skill = str_replace('NPC_COMBOATTACK#Multi-stage Attack#','NPC_COMBOATTACK#Multi-stage Attack#',$skill);
$skill = str_replace('NPC_GUIDEATTACK#On-target Impact Attack#','NPC_GUIDEATTACK#On-target Impact Attack#',$skill);
$skill = str_replace('NPC_SELFDESTRUCTION#Suicide bombing#','NPC_SELFDESTRUCTION#Suicide bombing#',$skill);
$skill = str_replace('NPC_SPLASHATTACK#Range attack#','NPC_SPLASHATTACK#Range attack#',$skill);
$skill = str_replace('NPC_SUICIDE#Suicide#','NPC_SUICIDE#Suicide#',$skill);
$skill = str_replace('NPC_POISON#Poison Attack#','NPC_POISON#Poison Attack#',$skill);
$skill = str_replace('NPC_BLINDATTACK#Darkness Attack#','NPC_BLINDATTACK#Darkness Attack#',$skill);
$skill = str_replace('NPC_SILENCEATTACK#Silence Attack#','NPC_SILENCEATTACK#Silence Attack#',$skill);
$skill = str_replace('NPC_STUNATTACK#Stun Attack#','NPC_STUNATTACK#Stun Attack#',$skill);
$skill = str_replace('NPC_PETRIFYATTACK#Petrify Attack#','NPC_PETRIFYATTACK#Petrify Attack#',$skill);
$skill = str_replace('NPC_CURSEATTACK#Cursing Attack #','NPC_CURSEATTACK#Cursing Attack #',$skill);
$skill = str_replace('NPC_SLEEPATTACK#Sleep attack#','NPC_SLEEPATTACK#Sleep attack#',$skill);
$skill = str_replace('NPC_RANDOMATTACK#Random Attack #','NPC_RANDOMATTACK#Random Attack #',$skill);
$skill = str_replace('NPC_WATERATTACK#Water Attribute Attack#','NPC_WATERATTACK#Water Attribute Attack#',$skill);
$skill = str_replace('NPC_GROUNDATTACK#Earth Attribute Attack#','NPC_GROUNDATTACK#Earth Attribute Attack#',$skill);
$skill = str_replace('NPC_FIREATTACK#Fire Attribute Attack#','NPC_FIREATTACK#Fire Attribute Attack#',$skill);
$skill = str_replace('NPC_WINDATTACK#Wind Attribute Attack#','NPC_WINDATTACK#Wind Attribute Attack#',$skill);
$skill = str_replace('NPC_POISONATTACK#Poison Attribute Attack#','NPC_POISONATTACK#Poison Attribute Attack#',$skill);
$skill = str_replace('NPC_HOLYATTACK#Holy Attribute Attack#','NPC_HOLYATTACK#Holy Attribute Attack#',$skill);
$skill = str_replace('NPC_DARKNESSATTACK#Shadow Attribute Attack#','NPC_DARKNESSATTACK#Shadow Attribute Attack#',$skill);
$skill = str_replace('NPC_TELEKINESISATTACK#Sense Attribute Attack#','NPC_TELEKINESISATTACK#Sense Attribute Attack#',$skill);
$skill = str_replace('NPC_MAGICALATTACK#Demon Shock Attack#','NPC_MAGICALATTACK#Demon Shock Attack#',$skill);
$skill = str_replace('NPC_METAMORPHOSIS#Metamorphosis#','NPC_METAMORPHOSIS#Metamorphosis#',$skill);
$skill = str_replace('NPC_PROVOCATION#Provocation#','NPC_PROVOCATION#Provocation#',$skill);
$skill = str_replace('NPC_SMOKING#Smoking#','NPC_SMOKING#Smoking#',$skill);
$skill = str_replace('NPC_SUMMONSLAVE#Follower Summons#','NPC_SUMMONSLAVE#Follower Summons#',$skill);
$skill = str_replace('NPC_EMOTION#Emotion#','NPC_EMOTION#Emotion#',$skill);
$skill = str_replace('NPC_TRANSFORMATION#Transformation#','NPC_TRANSFORMATION#Transformation#',$skill);
$skill = str_replace('NPC_BLOODDRAIN#Sucking Blood#','NPC_BLOODDRAIN#Sucking Blood#',$skill);
$skill = str_replace('NPC_ENERGYDRAIN#Energy Drain#','NPC_ENERGYDRAIN#Energy Drain#',$skill);
$skill = str_replace('NPC_KEEPING#Keeping#','NPC_KEEPING#Keeping#',$skill);
$skill = str_replace('NPC_DARKBREATH#Dark Breath#','NPC_DARKBREATH#Dark Breath#',$skill);
$skill = str_replace('NPC_DARKBLESSING#Dark Blessing#','NPC_DARKBLESSING#Dark Blessing#',$skill);
$skill = str_replace('NPC_BARRIER#Barrier#','NPC_BARRIER#Barrier#',$skill);
$skill = str_replace('NPC_DEFENDER#Defender#','NPC_DEFENDER#Defender#',$skill);
$skill = str_replace('NPC_LICK#Lick#','NPC_LICK#Lick#',$skill);
$skill = str_replace('NPC_HALLUCINATION#Hallucination#','NPC_HALLUCINATION#Hallucination#',$skill);
$skill = str_replace('NPC_REBIRTH#Rebirth#','NPC_REBIRTH#Rebirth#',$skill);
$skill = str_replace('NPC_SUMMONMONSTER#Monster Summons#','NPC_SUMMONMONSTER#Monster Summons#',$skill);
$skill = str_replace('RG_SNATCHER#Gank#','RG_SNATCHER#M�os_Leves#',$skill);
$skill = str_replace('RG_STEALCOIN#Mug#','RG_STEALCOIN#Afanar#',$skill);
$skill = str_replace('RG_BACKSTAP#Back Stab#','RG_BACKSTAP#Apunhalar#',$skill);
$skill = str_replace('RG_TUNNELDRIVE#Stalk#','RG_TUNNELDRIVE#T�nel_de_Fuga#',$skill);
$skill = str_replace('RG_RAID#Sightless Raid#','RG_RAID#Ataque_Surpresa#',$skill);
$skill = str_replace('RG_STRIPWEAPON#Divest Weapon#','RG_STRIPWEAPON#Remover_Arma#',$skill);
$skill = str_replace('RG_STRIPSHIELD#Divest Shield#','RG_STRIPSHIELD#Remover_Escudo#',$skill);
$skill = str_replace('RG_STRIPARMOR#Divest Armor#','RG_STRIPARMOR#Remover_Armadura#',$skill);
$skill = str_replace('RG_STRIPHELM#Divest Helm#','RG_STRIPHELM#Remover_Capacete#',$skill);
$skill = str_replace('RG_INTIMIDATE#Snatch#','RG_INTIMIDATE#Rapto#',$skill);
$skill = str_replace('RG_GRAFFITI#Scribble#','RG_GRAFFITI#Grafitti#',$skill);
$skill = str_replace('RG_FLAGGRAFFITI#Piece#','RG_FLAGGRAFFITI#Pichar#',$skill);
$skill = str_replace('RG_CLEANER#Remover#','RG_CLEANER#Faxina#',$skill);
$skill = str_replace('RG_GANGSTER#Slyness#','RG_GANGSTER#Malandragem#',$skill);
$skill = str_replace('RG_COMPULSION#Haggle#','RG_COMPULSION#Extorquir#',$skill);
$skill = str_replace('RG_PLAGIARISM#Intimidate#','RG_PLAGIARISM#Pl�gio#',$skill);
$skill = str_replace('AM_AXEMASTERY#Axe Mastery#','AM_AXEMASTERY#Per�cia_com_Machado#',$skill);
$skill = str_replace('AM_LEARNINGPOTION#Potion Research#','AM_LEARNINGPOTION#Pesquisa_de_Po��es#',$skill);
$skill = str_replace('AM_PHARMACY#Prepare Potion#','AM_PHARMACY#Preparar_Po��o#',$skill);
$skill = str_replace('AM_DEMONSTRATION#Bomb#','AM_DEMONSTRATION#Fogo_Grego#',$skill);
$skill = str_replace('AM_ACIDTERROR#Acid Terror#','AM_ACIDTERROR#Terror_�cido#',$skill);
$skill = str_replace('AM_POTIONPITCHER#Aid Potion#','AM_POTIONPITCHER#Arremessar_Po��o#',$skill);
$skill = str_replace('AM_CANNIBALIZE#Summon Flora#','AM_CANNIBALIZE#Criar_Flora#',$skill);
$skill = str_replace('AM_SPHEREMINE#Summon Marine Sphere#','AM_SPHEREMINE#Criar_Esfera_Marinha#',$skill);
$skill = str_replace('AM_CP_WEAPON#Alchemical Weapon#','AM_CP_WEAPON#Revestir_Arma#',$skill);
$skill = str_replace('AM_CP_SHIELD#Synthesized Shield#','AM_CP_SHIELD#Revestir_Escudo#',$skill);
$skill = str_replace('AM_CP_ARMOR#Synthetic Armor#','AM_CP_ARMOR#Revestir_Armadura#',$skill);
$skill = str_replace('AM_CP_HELM#Biochemical Helm#','AM_CP_HELM#Revestir_Capacete#',$skill);
$skill = str_replace('AM_BIOETHICS#Basis of Life#','AM_BIOETHICS#Bio�tica#',$skill);
$skill = str_replace('AM_BIOTECHNOLOGY#Biotechnology#','AM_BIOTECHNOLOGY#Biotecnologia#',$skill);
$skill = str_replace('AM_CREATECREATURE#Life Creation#','AM_CREATECREATURE#Criar_Criatura#',$skill);
$skill = str_replace('AM_CULTIVATION#Cultivation#','AM_CULTIVATION#Cultivo#',$skill);
$skill = str_replace('AM_FLAMECONTROL#Flame Control#','AM_FLAMECONTROL#Controle_das_Chamas#',$skill);
$skill = str_replace('AM_CALLHOMUN#Call Homunculus#','AM_CALLHOMUN#Criar_Homunculus#',$skill);
$skill = str_replace('AM_REST#Peaceful Rest#','AM_REST#Vaporizar#',$skill);
$skill = str_replace('AM_DRILLMASTER#Drillmaster#','AM_DRILLMASTER#Semeadeira#',$skill);
$skill = str_replace('AM_HEALHOMUN#Heal Homunculus#','AM_HEALHOMUN#Curar_Homunculus#',$skill);
$skill = str_replace('AM_RESURRECTHOMUN#Ressurect Homunculus#','AM_RESURRECTHOMUN#Ressuscitar_Homunculus#',$skill);
$skill = str_replace('CR_TRUST#Faith#','CR_TRUST#F�#',$skill);
$skill = str_replace('CR_AUTOGUARD#Guard#','CR_AUTOGUARD#Bloqueio#',$skill);
$skill = str_replace('CR_SHIELDCHARGE#Smite#','CR_SHIELDCHARGE#Puni��o_Divina#',$skill);
$skill = str_replace('CR_SHIELDBOOMERANG#Shield Boomerang#','CR_SHIELDBOOMERANG#Escudo_Bumerangue#',$skill);
$skill = str_replace('CR_REFLECTSHIELD#Shield Reflect#','CR_REFLECTSHIELD#Escudo_Refletor#',$skill);
$skill = str_replace('CR_HOLYCROSS#Holy Cross#','CR_HOLYCROSS#Crux_Divinum#',$skill);
$skill = str_replace('CR_GRANDCROSS#Grand Cross#','CR_GRANDCROSS#Crux_Magnun#',$skill);
$skill = str_replace('CR_DEVOTION#Sacrifice#','CR_DEVOTION#Reden��o#',$skill);
$skill = str_replace('CR_PROVIDENCE#Resistant Souls#','CR_PROVIDENCE#Divina_Provid�ncia#',$skill);
$skill = str_replace('CR_DEFENDER#Defending Aura#','CR_DEFENDER#Aura_Sagrada#',$skill);
$skill = str_replace('CR_SPEARQUICKEN#Spear Quicken#','CR_SPEARQUICKEN#Rapidez_com_Lan�a#',$skill);
$skill = str_replace('MO_IRONHAND#Iron Fists#','MO_IRONHAND#Punhos_de_Ferro#',$skill);
$skill = str_replace('MO_SPIRITSRECOVERY#Spiritual Cadence#','MO_SPIRITSRECOVERY#Medita��o#',$skill);
$skill = str_replace('MO_CALLSPIRITS#Summon Spirit Sphere#','MO_CALLSPIRITS#Invocar_Esfera_Espiritual#',$skill);
$skill = str_replace('MO_ABSORBSPIRITS#Absorb Spirit Sphere#','MO_ABSORBSPIRITS#Absorver_Esferas_Espirituais#',$skill);
$skill = str_replace('MO_TRIPLEATTACK#Raging Triple Blow#','MO_TRIPLEATTACK#Combo_Triplo#',$skill);
$skill = str_replace('MO_BODYRELOCATION#Snap#','MO_BODYRELOCATION#Passo_Et�reo#',$skill);
$skill = str_replace('MO_DODGE#Dodge#','MO_DODGE#Cair_das_P�talas#',$skill);
$skill = str_replace('MO_INVESTIGATE#Occult Impact#','MO_INVESTIGATE#Impacto_Ps�quico#',$skill);
$skill = str_replace('MO_FINGEROFFENSIVE#Throw Spirit Sphere#','MO_FINGEROFFENSIVE#Disparo_de_Esferas_Espirituais#',$skill);
$skill = str_replace('MO_STEELBODY#Mental Strength#','MO_STEELBODY#Corpo_Fechado#',$skill);
$skill = str_replace('MO_BLADESTOP#Root#','MO_BLADESTOP#Dilema#',$skill);
$skill = str_replace('MO_EXPLOSIONSPIRITS#Fury#','MO_EXPLOSIONSPIRITS#F�ria_Interior#',$skill);
$skill = str_replace('MO_EXTREMITYFIST#Asura Strike#','MO_EXTREMITYFIST#Punho_Supremo_de_Asura#',$skill);
$skill = str_replace('MO_CHAINCOMBO#Raging Quadruple Blow#','MO_CHAINCOMBO#Combo_Qu�druplo#',$skill);
$skill = str_replace('MO_COMBOFINISH#Raging Thrust#','MO_COMBOFINISH#O_�ltimo_Drag�o#',$skill);
$skill = str_replace('SA_ADVANCEDBOOK#Study#','SA_ADVANCEDBOOK#Estudo_de_Livros#',$skill);
$skill = str_replace('SA_CASTCANCEL#Cast Cancel#','SA_CASTCANCEL#Cancelar_magia#',$skill);
$skill = str_replace('SA_MAGICROD#Magic Rod#','SA_MAGICROD#Espelho_M�gico#',$skill);
$skill = str_replace('SA_SPELLBREAKER#Spell Break#','SA_SPELLBREAKER#Desconcentrar#',$skill);
$skill = str_replace('SA_FREECAST#Free Cast#','SA_FREECAST#Conjura��o_Livre#',$skill);
$skill = str_replace('SA_AUTOSPELL#Hindsight#','SA_AUTOSPELL#Desejo_Arcano#',$skill);
$skill = str_replace('SA_FLAMELAUNCHER#Endow Blaze#','SA_FLAMELAUNCHER#Encantar_com_Chama#',$skill);
$skill = str_replace('SA_FROSTWEAPON#Endow Tsunami#','SA_FROSTWEAPON#Encantar_com_Geada#',$skill);
$skill = str_replace('SA_LIGHTNINGLOADER#Endow Tornado#','SA_LIGHTNINGLOADER#Encantar_com_Ventania#',$skill);
$skill = str_replace('SA_SEISMICWEAPON#Endow Quake#','SA_SEISMICWEAPON#Encantar_com_Terremoto#',$skill);
$skill = str_replace('SA_DRAGONOLOGY#Dragonology#','SA_DRAGONOLOGY#Dragonologia#',$skill);
$skill = str_replace('SA_VOLCANO#Volcano#','SA_VOLCANO#Vulc�o#',$skill);
$skill = str_replace('SA_DELUGE#Deluge#','SA_DELUGE#Dil�vio#',$skill);
$skill = str_replace('SA_VIOLENTGALE#Whirlwind#','SA_VIOLENTGALE#Furac�o#',$skill);
$skill = str_replace('SA_LANDPROTECTOR#Magnetic Earth#','SA_LANDPROTECTOR#Proteger_Terreno#',$skill);
$skill = str_replace('SA_DISPELL#Dispel#','SA_DISPELL#Desencantar#',$skill);
$skill = str_replace('SA_ABRACADABRA#Hocus-pocus#','SA_ABRACADABRA#Abracadabra#',$skill);
$skill = str_replace('SA_MONOCELL#Monocell#','SA_MONOCELL#Mono_Cell#',$skill);
$skill = str_replace('SA_CLASSCHANGE#Class Change#','SA_CLASSCHANGE#Transforma��o#',$skill);
$skill = str_replace('SA_SUMMONMONSTER#Summon Monster#','SA_SUMMONMONSTER#Invocar_Monstro#',$skill);
$skill = str_replace('SA_REVERSEORCISH#Orcish Face#','SA_REVERSEORCISH#Transforma��o_Orc#',$skill);
$skill = str_replace('SA_DEATH#Death#','SA_DEATH#Exterm�nio#',$skill);
$skill = str_replace('SA_FORTUNE#Fortune#','SA_FORTUNE#Toque_de_Midas#',$skill);
$skill = str_replace('SA_TAMINGMONSTER#Tame Monster#','SA_TAMINGMONSTER#Hipnose#',$skill);
$skill = str_replace('SA_QUESTION#Question#','SA_QUESTION#Interrogat�rio#',$skill);
$skill = str_replace('SA_GRAVITY#Gravity#','SA_GRAVITY#Gravity#',$skill);
$skill = str_replace('SA_LEVELUP#Level Up#','SA_LEVELUP#Level_Up!#',$skill);
$skill = str_replace('SA_INSTANTDEATH#Instant Death#','SA_INSTANTDEATH#Suic�dio#',$skill);
$skill = str_replace('SA_FULLRECOVERY#Full Recovery#','SA_FULLRECOVERY#Recupera��o#',$skill);
$skill = str_replace('SA_COMA#Coma#','SA_COMA#Coma#',$skill);
$skill = str_replace('BD_ADAPTATION#Amp#','BD_ADAPTATION#Encerramento#',$skill);
$skill = str_replace('BD_ENCORE#Encore#','BD_ENCORE#Bis#',$skill);
$skill = str_replace('BD_LULLABY#Lullaby#','BD_LULLABY#Cantiga_de_Ninar#',$skill);
$skill = str_replace('BD_RICHMANKIM#Mental Sensing#','BD_RICHMANKIM#Banquete_de_Njord#',$skill);
$skill = str_replace('BD_ETERNALCHAOS#Down Tempo#','BD_ETERNALCHAOS#Ritmo_Ca�tico#',$skill);
$skill = str_replace('BD_DRUMBATTLEFIELD#Battle Theme#','BD_DRUMBATTLEFIELD#Rufar_dos_Tambores#',$skill);
$skill = str_replace('BD_RINGNIBELUNGEN#Harmonic Lick#','BD_RINGNIBELUNGEN#Anel_dos_Nibelungos#',$skill);
$skill = str_replace('BD_ROKISWEIL#Classical Pluck#','BD_ROKISWEIL#Lamento_de_Loki#',$skill);
$skill = str_replace('BD_INTOABYSS#Power Chord#','BD_INTOABYSS#Can��o_Preciosa#',$skill);
$skill = str_replace('BD_SIEGFRIED#Acoustic Rhythm#','BD_SIEGFRIED#Ode_a_Siegfried#',$skill);
$skill = str_replace('BD_RAGNAROK#Ragnarok#','BD_RAGNAROK#Ragnar�k#',$skill);
$skill = str_replace('BA_MUSICALLESSON#Music Lesson#','BA_MUSICALLESSON#Li��es_de_M�sica#',$skill);
$skill = str_replace('BA_MUSICALSTRIKE#Melody Strike#','BA_MUSICALSTRIKE#Flecha_Mel�dica#',$skill);
$skill = str_replace('BA_DISSONANCE#Unchained Serenade#','BA_DISSONANCE#Disson�ncia#',$skill);
$skill = str_replace('BA_FROSTJOKE#Unbarring Octave#','BA_FROSTJOKE#Piada_Infame#',$skill);
$skill = str_replace('BA_WHISTLE#Perfect Tablature#','BA_WHISTLE#Assovio#',$skill);
$skill = str_replace('BA_ASSASSINCROSS#Impressive Riff#','BA_ASSASSINCROSS#Crep�sculo_Sangrento#',$skill);
$skill = str_replace('BA_POEMBRAGI#Magic Strings#','BA_POEMBRAGI#Poema_de_Bragi#',$skill);
$skill = str_replace('BA_APPLEIDUN#Song of Lutie#','BA_APPLEIDUN#Ma��s_de_Idun#',$skill);
$skill = str_replace('DC_DANCINGLESSON#Dance Lessons#','DC_DANCINGLESSON#Li��es_de_Dan�a#',$skill);
$skill = str_replace('DC_THROWARROW#Slinging Arrow#','DC_THROWARROW#Estilingue#',$skill);
$skill = str_replace('DC_UGLYDANCE#Hip Shaker#','DC_UGLYDANCE#Dan�a_do_Ventre#',$skill);
$skill = str_replace('DC_SCREAM#Dazzler#','DC_SCREAM#Esc�ndalo#',$skill);
$skill = str_replace('DC_HUMMING#Focus Ballet#','DC_HUMMING#Sibilo#',$skill);
$skill = str_replace('DC_DONTFORGETME#Slow Grace#','DC_DONTFORGETME#N�o_Me_Abandones#',$skill);
$skill = str_replace('DC_FORTUNEKISS#Lady Luck#','DC_FORTUNEKISS#Beijo_da_Sorte#',$skill);
$skill = str_replace("DC_SERVICEFORYOU#Gypsy's Kiss#","DC_SERVICEFORYOU#Dan�a_Cigana#",$skill);
$skill = str_replace('NPC_RANDOMMOVE','WE_MALE#Amor_Verdadeiro#',$skill);
$skill = str_replace('NPC_SPEEDUP','WE_FEMALE#Amor_Eterno#',$skill);
$skill = str_replace('NPC_REVENGE','WE_CALLPARTNER#Saudades_de_Voc�#',$skill);
$skill = str_replace('WE_MALE#I Will Protect You#','GD_APPROVAL#Autoriza��o_Oficial#',$skill);
$skill = str_replace('WE_FEMALE#I Look up to You#','GD_KAFRACONTRACT#Contrato_com_Kafra#',$skill);
$skill = str_replace('WE_CALLPARTNER#I miss You#','GD_GUARDRESEARCH#Comandar_Guardi�es#',$skill);
$skill = str_replace('GD_APPROVAL#Approval#','GD_GUARDUP#Carisma#',$skill);
$skill = str_replace('GD_KAFRACONTRACT#Kafra Contract#','GD_EXTENSION#Expandir_Cl�#',$skill);
$skill = str_replace('GD_GUARDRESEARCH#Guardian Research#','GD_GLORYGUILD#Gl�ria_do_Cl�#',$skill);
$skill = str_replace('GD_GUARDUP#Guardian Training#','GD_LEADERSHIP#Grande_Lideran�a#',$skill);
$skill = str_replace('GD_EXTENSION#Guild Extension#','GD_GLORYWOUNDS#Feridas_da_Gl�ria#',$skill);
$skill = str_replace("GD_GLORYGUILD#Guild's Glory#","GD_SOULCOLD#Alma_Fria#",$skill);
$skill = str_replace('GD_LEADERSHIP#Great Leadership#','GD_HAWKEYES#Olhos_Afiados#',$skill);
$skill = str_replace('GD_GLORYWOUNDS#Wounds of Glory#','GD_BATTLEORDER#Ordens_de_Batalha#',$skill);
$skill = str_replace('GD_SOULCOLD#Cold Soul#','GD_REGENERATION#Regenera��o#',$skill);
$skill = str_replace('GD_HAWKEYES#Sharp Eyes#','GD_RESTORE#Restaurar#',$skill);
$skill = str_replace('GD_BATTLEORDER#Battle Orders#','GD_EMERGENCYCALL#Reunir_Cl�#',$skill);
$skill = str_replace('GD_REGENERATION#Regeneration#','GD_DEVELOPMENT#Estender_Cl�#',$skill);
$skill = str_replace('GD_EMERGENCYCALL#Rally Guild#','GD_EMERGENCYCALL#Reunir_Cl�#',$skill);
$skill = str_replace('GD_DEVELOPMENT#Extend Guild#','GD_DEVELOPMENT#Estender_Cl�#',$skill);

$fp = fopen($file, 'w');
if (!fwrite($fp, $skill)) {
echo "<font color=\"red\">O arquivo n�o foi convertido</font><br>";
}
echo "<font color=\"green\">O arquivo convertido</font><br>";
fclose($fp);

?>