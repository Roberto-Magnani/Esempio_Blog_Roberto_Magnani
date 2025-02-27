<body>
    <div class="container">
        <div class="row">
            <div class="Main col-10 col-md-10 bg-dark text-white justify-content-center align-items-center myclass">

                <div class="title">
                    <h2 class="Title">5e Point Buy Calculator</h2>
                </div>
                <div class="nav">
                    <div class="hamburger">
                        <input class="menuCheck" type="checkbox">
                        <span></span>
                        <span></span>
                        <span></span>
                        <div class="menu">
                            <div class="navOne">
                                <h3 class="calcHead">Calculator</h3>
                            </div>
                            <div class="navTwo">
                                <h3 class="houseHead">Custom Rules</h3>
                            </div>
                            <div class="navThree">
                                <h3 class="rawHead">Rules as Written</h3>
                            </div>
                            <div class="navFour">
                                <h3 class="saveHead">Save Scores</h3>
                            </div>
                        </div>
                    </div>
                    <div class="navFive">
                        <h3 class="menuHead">Menu</h3>
                    </div>
                </div>
                <div class="rawDiv">
                    <div class="underline">
                        <h3>Rules as Written</h3>
                    </div>
                    <div class="rawMin">
                        <dl class="raw">
                            <dt>Default Point Buy Rules</dt>
                            <dd><span>Available Points - 27</span></dd>
                            <dd><span>Maximum Attribute Before Racial Bonus - 15</span></dd>
                            <dd><span>Minimum Attribute Before Racial Bonus - 8</span></dd>
                            <dt>Subraces and Variants</dt>
                            <dd><span>Subraces <u>must</u> be chosen for a race. Variants are considered optional.
                                    Currently Half-Elves, Humans, Orcs, and Tieflings have <u>optional</u> racial
                                    Variants. Other races that have no Subrace or Variant include Aarakocra, Bugbear,
                                    Centaur, Changeling, Dragonborn, Firbolg, Goblin, Goliath, Grung, Half-Orc,
                                    Hobgoblin, Kalashtar, Kenku, Kobold, Leonin, Lizardfolk, Locathah, Loxodon,
                                    Minotaur, Orc, Satyr, Simic Hybrid, Tabaxi, Tortle, Triton, Vedalken, Warforged, and
                                    Yuan-Ti Pureblood.</span></dd>
                            <dt>Ask</dt>
                            <dd><span>Always ask your DM first before picking a race, especially a non-standard race or
                                    subrace. Some races, a Loxodon as an example, require the character to come from a
                                    different world setting than the traditional Forgotten Realms.</span></dd>
                        </dl>
                    </div>
                </div>
                <div class="houseRules">
                    <div class="underline">
                        <h3>Custom Rules</h3>
                    </div>
                    <dl>
                        <dt class="houseinfo">Your DM may use House Rules regarding the Point Buy system. Adjust the
                            numbers below to meet those rules.</dt>
                    </dl>
                    <div class="houseCenter">
                        <div class="houseCont">
                            <dl class="house">
                                <dt>Available Points</dt>
                                <dd>
                                    <div class="inputCont">
                                        <table>
                                            <tbody>
                                                <tr class="updown">
                                                    <td>
                                                        <input type="number" id="AvailablePoints"
                                                            name="AvailablePoints" value="27" min="1"
                                                            max="99" step="1" readonly="Readonly"
                                                            onchange="getTotals(), pointsReset()">
                                                    </td>
                                                    <td class="updownCont">
                                                        <button class="up" onclick="increment(event)"
                                                            value="AvailablePoints"></button>
                                                        <button class="down" onclick="decrement(event)"
                                                            value="AvailablePoints"></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </dd>
                                <dt>Maximum Purchasable Attribute Before Bonuses</dt>
                                <dd>
                                    <div class="inputCont">
                                        <table>
                                            <tbody>
                                                <tr class="updown">
                                                    <td>
                                                        <input type="number" id="AttributeMax" name="AttributeMax"
                                                            value="15" min="9" max="18" step="1"
                                                            readonly="Readonly" onchange="getTotals(), pointsReset()">
                                                    </td>
                                                    <td class="updownCont">
                                                        <button class="up" onclick="increment(event)"
                                                            value="AttributeMax"></button>
                                                        <button class="down" onclick="decrement(event)"
                                                            value="AttributeMax"></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </dd>
                                <dt>Minimum Purchasable Attribute Before Bonuses</dt>
                                <dd>
                                    <div class="inputCont">
                                        <table>
                                            <tbody>
                                                <tr class="updown">
                                                    <td>
                                                        <input type="number" id="AttributeMin" name="AttributeMin"
                                                            value="8" min="3" max="15" step="1"
                                                            readonly="Readonly" onchange="getTotals(), pointsReset()">
                                                    </td>
                                                    <td class="updownCont">
                                                        <button class="up" onclick="increment(event)"
                                                            value="AttributeMin"></button>
                                                        <button class="down" onclick="decrement(event)"
                                                            value="AttributeMin"></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </dd>
                                <br>
                                <dd><input type="button" value="Full Reset" title="Resets all settings and choices"
                                        class="FullReset" onclick="fullReset()"></dd>
                            </dl>
                        </div>
                        <div class="costCont">
                            <table>
                                <tbody>
                                    <tr>
                                        <td style="padding-bottom: 40px;"></td>
                                        <td>Adjust Point Costs</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="customCost">
                                <tbody>
                                    <tr class="downup">
                                        <td class="costChange">18 :</td>
                                        <td>
                                            <input type="number" id="costCount" class="value18" value="19"
                                                min="0" max="50" step="1" readonly="Readonly">
                                        </td>
                                        <td class="updownCont">
                                            <button class="up" onclick="increase(event)" value="18"></button>
                                            <button class="down" onclick="decrease(event)" value="18"></button>
                                        </td>
                                        <td class="costChange">17 :</td>
                                        <td>
                                            <input type="number" id="costCount" class="value17" value="15"
                                                min="0" max="45" step="1" readonly="Readonly">
                                        </td>
                                        <td class="updownCont">
                                            <button class="up" onclick="increase(event)" value="17"></button>
                                            <button class="down" onclick="decrease(event)" value="17"></button>
                                        </td>
                                        <td class="costChange">16 :</td>
                                        <td>
                                            <input type="number" id="costCount" class="value16" value="12"
                                                min="0" max="40" step="1" readonly="Readonly">
                                        </td>
                                        <td class="updownCont">
                                            <button class="up" onclick="increase(event)" value="16"></button>
                                            <button class="down" onclick="decrease(event)" value="16"></button>
                                        </td>
                                        <td class="costChange">15 :</td>
                                        <td>
                                            <input type="number" id="costCount" class="value15" value="9"
                                                min="0" max="35" step="1" readonly="Readonly">
                                        </td>
                                        <td class="updownCont">
                                            <button class="up" onclick="increase(event)" value="15"></button>
                                            <button class="down" onclick="decrease(event)" value="15"></button>
                                        </td>
                                    </tr>
                                    <tr class="downup">
                                        <td class="costChange">14 :</td>
                                        <td>
                                            <input type="number" id="costCount" class="value14" value="7"
                                                min="0" max="30" step="1" readonly="Readonly">
                                        </td>
                                        <td class="updownCont">
                                            <button class="up" onclick="increase(event)" value="14"></button>
                                            <button class="down" onclick="decrease(event)" value="14"></button>
                                        </td>
                                        <td class="costChange">13 :</td>
                                        <td>
                                            <input type="number" id="costCount" class="value13" value="5"
                                                min="0" max="25" step="1" readonly="Readonly">
                                        </td>
                                        <td class="updownCont">
                                            <button class="up" onclick="increase(event)" value="13"></button>
                                            <button class="down" onclick="decrease(event)" value="13"></button>
                                        </td>
                                        <td class="costChange">12 :</td>
                                        <td>
                                            <input type="number" id="costCount" class="value12" value="4"
                                                min="0" max="20" step="1" readonly="Readonly">
                                        </td>
                                        <td class="updownCont">
                                            <button class="up" onclick="increase(event)" value="12"></button>
                                            <button class="down" onclick="decrease(event)" value="12"></button>
                                        </td>
                                        <td class="costChange">11 :</td>
                                        <td>
                                            <input type="number" id="costCount" class="value11" value="3"
                                                min="0" max="15" step="1" readonly="Readonly">
                                        </td>
                                        <td class="updownCont">
                                            <button class="up" onclick="increase(event)" value="11"></button>
                                            <button class="down" onclick="decrease(event)" value="11"></button>
                                        </td>
                                    </tr>
                                    <tr class="downup">
                                        <td class="costChange">10 :</td>
                                        <td>
                                            <input type="number" id="costCount" class="value10" value="2"
                                                min="0" max="10" step="1" readonly="Readonly">
                                        </td>
                                        <td class="updownCont">
                                            <button class="up" onclick="increase(event)" value="10"></button>
                                            <button class="down" onclick="decrease(event)" value="10"></button>
                                        </td>
                                        <td class="costChange">&nbsp;9 :</td>
                                        <td>
                                            <input type="number" id="costCount" class="value9" value="1"
                                                min="0" max="5" step="1" readonly="Readonly">
                                        </td>
                                        <td class="updownCont">
                                            <button class="up" onclick="increase(event)" value="9"></button>
                                            <button class="down" onclick="decrease(event)" value="9"></button>
                                        </td>
                                        <td class="costChange">&nbsp;8 :</td>
                                        <td>
                                            <input type="number" id="costCount" class="value8" value="0"
                                                min="0" max="0" step="1" readonly="Readonly">
                                        </td>
                                        <td class="updownCont">
                                            <button class="up" onclick="increase(event)" value="8"></button>
                                            <button class="down" onclick="decrease(event)" value="8"></button>
                                        </td>
                                        <td class="costChange">&nbsp;7 :</td>
                                        <td>
                                            <input type="number" id="costCount" class="value7" value="-1"
                                                min="-5" max="0" step="1" readonly="Readonly">
                                        </td>
                                        <td class="updownCont">
                                            <button class="up" onclick="increase(event)" value="7"></button>
                                            <button class="down" onclick="decrease(event)" value="7"></button>
                                        </td>
                                    </tr>
                                    <tr class="downup">
                                        <td class="costChange">&nbsp;6 :</td>
                                        <td>
                                            <input type="number" id="costCount" class="value6" value="-2"
                                                min="-10" max="0" step="1" readonly="Readonly">
                                        </td>
                                        <td class="updownCont">
                                            <button class="up" onclick="increase(event)" value="6"></button>
                                            <button class="down" onclick="decrease(event)" value="6"></button>
                                        </td>
                                        <td class="costChange">&nbsp;5 :</td>
                                        <td>
                                            <input type="number" id="costCount" class="value5" value="-4"
                                                min="-15" max="0" step="1" readonly="Readonly">
                                        </td>
                                        <td class="updownCont">
                                            <button class="up" onclick="increase(event)" value="5"></button>
                                            <button class="down" onclick="decrease(event)" value="5"></button>
                                        </td>
                                        <td class="costChange">&nbsp;4 :</td>
                                        <td>
                                            <input type="number" id="costCount" class="value4" value="-6"
                                                min="-20" max="0" step="1" readonly="Readonly">
                                        </td>
                                        <td class="updownCont">
                                            <button class="up" onclick="increase(event)" value="4"></button>
                                            <button class="down" onclick="decrease(event)" value="4"></button>
                                        </td>
                                        <td class="costChange">&nbsp;3 :</td>
                                        <td>
                                            <input type="number" id="costCount" class="value3" value="-9"
                                                min="-25" max="0" step="1" readonly="Readonly">
                                        </td>
                                        <td class="updownCont">
                                            <button class="up" onclick="increase(event)" value="3"></button>
                                            <button class="down" onclick="decrease(event)" value="3"></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="points">
                    <div>
                        <div class="underline">
                            <h3>Calculator</h3>
                        </div>
                        <table class="Selection">
                            <tbody>
                                <tr>
                                    <td style="width: 25%;">Select Race:</td>
                                    <td style="width: 25%;" id="SelectRace"><select id="Race" class="Race"
                                            onchange="getRace()" style="width: 90%;">
                                            <option id="OptionSelect" value="Select Race" data-rchoice="select"
                                                disabled="" selected="">Select</option>
                                            <option value="CustomRace" data-rchoice="customrace">Custom Race</option>
                                            <option value="Aarakocra" data-rchoice="aarakocra">Aarakocra</option>
                                            <option value="Aasimar" data-rchoice="aasimar">Aasimar</option>
                                            <option value="Bugbear" data-rchoice="bugbear">Bugbear</option>
                                            <option value="Centaur" data-rchoice="centaur">Centaur</option>
                                            <option value="Changeling" data-rchoice="changeling">Changeling</option>
                                            <option value="Dragonborn" data-rchoice="dragonborn">Dragonborn</option>
                                            <option value="Dwarf" data-rchoice="dwarf">Dwarf</option>
                                            <option value="Elf" data-rchoice="elf">Elf</option>
                                            <option value="Firbolg" data-rchoice="firbolg">Firbolg</option>
                                            <option value="Genasi" data-rchoice="genasi">Genasi</option>
                                            <option value="Gith" data-rchoice="gith">Gith</option>
                                            <option value="Gnome" data-rchoice="gnome">Gnome</option>
                                            <option value="Goblin" data-rchoice="goblin">Goblin</option>
                                            <option value="Goliath" data-rchoice="goliath">Goliath</option>
                                            <option value="Grung" data-rchoice="grung">Grung</option>
                                            <option value="HalfElf" data-rchoice="halfelf">Half-Elf</option>
                                            <option value="HalfOrc" data-rchoice="halforc">Half-Orc</option>
                                            <option value="Halfling" data-rchoice="halfling">Halfling</option>
                                            <option value="Hobgoblin" data-rchoice="hobgoblin">Hobgoblin</option>
                                            <option value="Human" data-rchoice="human">Human</option>
                                            <option value="Kalashtar" data-rchoice="kalashtar">Kalashtar</option>
                                            <option value="Kenku" data-rchoice="kenku">Kenku</option>
                                            <option value="Kobold" data-rchoice="kobold">Kobold</option>
                                            <option value="Leonin" data-rchoice="leonin">Leonin</option>
                                            <option value="Lizardfolk" data-rchoice="lizardfolk">Lizardfolk</option>
                                            <option value="Locathah" data-rchoice="locathah">Locathah</option>
                                            <option value="Loxodon" data-rchoice="loxodon">Loxodon</option>
                                            <option value="Minotaur" data-rchoice="minotaur">Minotaur</option>
                                            <option value="Orc" data-rchoice="orc">Orc</option>
                                            <option value="Satyr" data-rchoice="satyr">Satyr</option>
                                            <option value="Shifter" data-rchoice="shifter">Shifter</option>
                                            <option value="SimicHybrid" data-rchoice="simichybrid">Simic Hybrid
                                            </option>
                                            <option value="Tabaxi" data-rchoice="tabaxi">Tabaxi</option>
                                            <option value="Tiefling" data-rchoice="tiefling">Tiefling</option>
                                            <option value="Tortle" data-rchoice="tortle">Tortle</option>
                                            <option value="Triton" data-rchoice="triton">Triton</option>
                                            <option value="Vedalken" data-rchoice="vedalken">Vedalken</option>
                                            <option value="Warforged" data-rchoice="warforged">Warforged</option>
                                            <option value="YuanTi" data-rchoice="yuanti">Yuan-Ti Pureblood</option>
                                        </select></td>
                                    <td style="width: 25%;" id="SubraceOption"></td>
                                    <td style="width: 25%;" id="SelectSubrace"></td>
                                </tr>
                                <tr id="abilityOptions">
                                    <td style="display: none;" id="AbilityOption1">Ability Score #1:</td>
                                    <td style="display: none;" id="AbilityMod1"><select id="ability1"
                                            style="width: 90%;">
                                            <option value="selected">Select Attribute</option>
                                            <option value="RacialStr">Strength</option>
                                            <option value="RacialDex">Dexterity</option>
                                            <option value="RacialCon">Constitution</option>
                                            <option value="RacialInt">Intelligence</option>
                                            <option value="RacialWis">Wisdom</option>
                                            <option value="RacialCha">Charisma</option>
                                        </select></td>
                                    <td style="display: none;" id="AbilityOption2">Ability Score #2:</td>
                                    <td style="display: none;" id="AbilityMod2"><select id="ability2"
                                            style="width: 90%;">
                                            <option value="selected">Select Attribute</option>
                                            <option value="RacialStr">Strength</option>
                                            <option value="RacialDex">Dexterity</option>
                                            <option value="RacialCon">Constitution</option>
                                            <option value="RacialInt">Intelligence</option>
                                            <option value="RacialWis">Wisdom</option>
                                            <option value="RacialCha">Charisma</option>
                                        </select></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="stats">
                        <br>
                        <table class="selection">
                            <thead>
                                <tr class="attributetop">
                                    <th style="width: 18%;">Attribute
                                    </th>
                                    <th style="width: 15%;">Ability Score</th>
                                    <th style="width: 8%;"></th>
                                    <th style="width: 12%;">Racial Bonus</th>
                                    <th style="width: 8%;"></th>
                                    <th style="width: 12%;">Total Score</th>
                                    <th style="width: 12%;">Ability Modifier</th>
                                    <th style="width: 15%;">Point Cost</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="attributeodd">
                                    <td>Strength</td>
                                    <td style="text-align: center;">
                                        <div class="inputCont">
                                            <table>
                                                <tbody>
                                                    <tr class="updown">
                                                        <td class="abilityCount" id="abilityCount">
                                                            <input type="number" id="AttributeStr"
                                                                name="AttributeStr" value="8" min="8"
                                                                max="15" step="1" readonly="Readonly"
                                                                onchange="getTotals()">
                                                        </td>
                                                        <td class="updownCont">
                                                            <button class="up" onclick="increment(event)"
                                                                value="AttributeStr"></button>
                                                            <button class="down" onclick="decrement(event)"
                                                                value="AttributeStr"></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                    <td style="text-align: center;">+</td>
                                    <td style="text-align: center;" id="RaceStr">
                                        <span id="RacialStr">0</span>
                                        <div id="customStr" class="inputCont" style="display:none">
                                            <table>
                                                <tbody>
                                                    <tr class="updown">
                                                        <td class="abilityCount" id="abilityCount">
                                                            <input type="number" id="RacialStr" value="0"
                                                                min="-4" max="4" step="1"
                                                                readonly="Readonly" onchange="getTotals()">
                                                        </td>
                                                        <td class="updownCont">
                                                            <button class="up" onclick="increment(event)"
                                                                value="RacialStr"></button>
                                                            <button class="down" onclick="decrement(event)"
                                                                value="RacialStr"></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                    <td style="text-align: center;">=</td>
                                    <td style="text-align: center;" class="Total"><span id="TotalStr">8</span></td>
                                    <td style="text-align: center;" class="Modifier"><span id="ModifierStr">-1</span>
                                    </td>
                                    <td style="text-align: center;"><span id="PointcostStr">0</span></td>
                                </tr>
                                <tr class="attributeeven">
                                    <td>Dexterity</td>
                                    <td style="text-align: center;">
                                        <div class="inputCont">
                                            <table>
                                                <tbody>
                                                    <tr class="updown">
                                                        <td class="abilityCount" id="abilityCount">
                                                            <input type="number" id="AttributeDex"
                                                                name="AttributeDex" value="8" min="8"
                                                                max="15" step="1" readonly="Readonly"
                                                                onchange="getTotals()">
                                                        </td>
                                                        <td class="updownCont">
                                                            <button class="up" onclick="increment(event)"
                                                                value="AttributeDex"></button>
                                                            <button class="down" onclick="decrement(event)"
                                                                value="AttributeDex"></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                    <td style="text-align: center;">+</td>
                                    <td style="text-align: center;" id="RaceDex">
                                        <span id="RacialDex">0</span>
                                        <div id="customDex" class="inputCont" style="display:none">
                                            <table>
                                                <tbody>
                                                    <tr class="updown">
                                                        <td class="abilityCount" id="abilityCount">
                                                            <input type="number" id="RacialDex" value="0"
                                                                min="-4" max="4" step="1"
                                                                readonly="Readonly" onchange="getTotals()">
                                                        </td>
                                                        <td class="updownCont">
                                                            <button class="up" onclick="increment(event)"
                                                                value="RacialDex"></button>
                                                            <button class="down" onclick="decrement(event)"
                                                                value="RacialDex"></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                    <td style="text-align: center;">=</td>
                                    <td style="text-align: center;" class="Total"><span id="TotalDex">8</span></td>
                                    <td style="text-align: center;" class="Modifier"><span id="ModifierDex">-1</span>
                                    </td>
                                    <td style="text-align: center;"><span id="PointcostDex">0</span></td>
                                </tr>
                                <tr class="attributeodd">
                                    <td>Constitution</td>
                                    <td style="text-align: center;">
                                        <div class="inputCont">
                                            <table>
                                                <tbody>
                                                    <tr class="updown">
                                                        <td class="abilityCount" id="abilityCount">
                                                            <input type="number" id="AttributeCon"
                                                                name="AttributeCon" value="8" min="8"
                                                                max="15" step="1" readonly="Readonly"
                                                                onchange="getTotals()">
                                                        </td>
                                                        <td class="updownCont">
                                                            <button class="up" onclick="increment(event)"
                                                                value="AttributeCon"></button>
                                                            <button class="down" onclick="decrement(event)"
                                                                value="AttributeCon"></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                    <td style="text-align: center;">+</td>
                                    <td style="text-align: center;" id="RaceCon">
                                        <span id="RacialCon">0</span>
                                        <div id="customCon" class="inputCont" style="display:none">
                                            <table>
                                                <tbody>
                                                    <tr class="updown">
                                                        <td class="abilityCount" id="abilityCount">
                                                            <input type="number" id="RacialCon" value="0"
                                                                min="-4" max="4" step="1"
                                                                readonly="Readonly" onchange="getTotals()">
                                                        </td>
                                                        <td class="updownCont">
                                                            <button class="up" onclick="increment(event)"
                                                                value="RacialCon"></button>
                                                            <button class="down" onclick="decrement(event)"
                                                                value="RacialCon"></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                    <td style="text-align: center;">=</td>
                                    <td style="text-align: center;" class="Total"><span id="TotalCon">8</span></td>
                                    <td style="text-align: center;" class="Modifier"><span id="ModifierCon">-1</span>
                                    </td>
                                    <td style="text-align: center;"><span id="PointcostCon">0</span></td>
                                </tr>
                                <tr class="attributeeven">
                                    <td>Intelligence</td>
                                    <td style="text-align: center;">
                                        <div class="inputCont">
                                            <table>
                                                <tbody>
                                                    <tr class="updown">
                                                        <td class="abilityCount" id="abilityCount">
                                                            <input type="number" id="AttributeInt"
                                                                name="AttributeInt" value="8" min="8"
                                                                max="15" step="1" readonly="Readonly"
                                                                onchange="getTotals()">
                                                        </td>
                                                        <td class="updownCont">
                                                            <button class="up" onclick="increment(event)"
                                                                value="AttributeInt"></button>
                                                            <button class="down" onclick="decrement(event)"
                                                                value="AttributeInt"></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                    <td style="text-align: center;">+</td>
                                    <td style="text-align: center;" id="RaceInt">
                                        <span id="RacialInt">0</span>
                                        <div id="customInt" class="inputCont" style="display:none">
                                            <table>
                                                <tbody>
                                                    <tr class="updown">
                                                        <td class="abilityCount" id="abilityCount">
                                                            <input type="number" id="RacialInt" value="0"
                                                                min="-4" max="4" step="1"
                                                                readonly="Readonly" onchange="getTotals()">
                                                        </td>
                                                        <td class="updownCont">
                                                            <button class="up" onclick="increment(event)"
                                                                value="RacialInt"></button>
                                                            <button class="down" onclick="decrement(event)"
                                                                value="RacialInt"></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                    <td style="text-align: center;">=</td>
                                    <td style="text-align: center;" class="Total"><span id="TotalInt">8</span></td>
                                    <td style="text-align: center;" class="Modifier"><span id="ModifierInt">-1</span>
                                    </td>
                                    <td style="text-align: center;"><span id="PointcostInt">0</span></td>
                                </tr>
                                <tr class="attributeodd">
                                    <td>Wisdom</td>
                                    <td style="text-align: center;">
                                        <div class="inputCont">
                                            <table>
                                                <tbody>
                                                    <tr class="updown">
                                                        <td class="abilityCount" id="abilityCount">
                                                            <input type="number" id="AttributeWis"
                                                                name="AttributeWis" value="8" min="8"
                                                                max="15" step="1" readonly="Readonly"
                                                                onchange="getTotals()">
                                                        </td>
                                                        <td class="updownCont">
                                                            <button class="up" onclick="increment(event)"
                                                                value="AttributeWis"></button>
                                                            <button class="down" onclick="decrement(event)"
                                                                value="AttributeWis"></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                    <td style="text-align: center;">+</td>
                                    <td style="text-align: center;" id="RaceWis">
                                        <span id="RacialWis">0</span>
                                        <div id="customWis" class="inputCont" style="display:none">
                                            <table>
                                                <tbody>
                                                    <tr class="updown">
                                                        <td class="abilityCount" id="abilityCount">
                                                            <input type="number" id="RacialWis" value="0"
                                                                min="-4" max="4" step="1"
                                                                readonly="Readonly" onchange="getTotals()">
                                                        </td>
                                                        <td class="updownCont">
                                                            <button class="up" onclick="increment(event)"
                                                                value="RacialWis"></button>
                                                            <button class="down" onclick="decrement(event)"
                                                                value="RacialWis"></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                    <td style="text-align: center;">=</td>
                                    <td style="text-align: center;" class="Total"><span id="TotalWis">8</span></td>
                                    <td style="text-align: center;" class="Modifier"><span id="ModifierWis">-1</span>
                                    </td>
                                    <td style="text-align: center;"><span id="PointcostWis">0</span></td>
                                </tr>
                                <tr class="attributeeven">
                                    <td>Charisma</td>
                                    <td style="text-align: center;">
                                        <div class="inputCont">
                                            <table>
                                                <tbody>
                                                    <tr class="updown">
                                                        <td class="abilityCount" id="abilityCount">
                                                            <input type="number" id="AttributeCha"
                                                                name="AttributeCha" value="8" min="8"
                                                                max="15" step="1" readonly="Readonly"
                                                                onchange="getTotals()">
                                                        </td>
                                                        <td class="updownCont">
                                                            <button class="up" onclick="increment(event)"
                                                                value="AttributeCha"></button>
                                                            <button class="down" onclick="decrement(event)"
                                                                value="AttributeCha"></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                    <td style="text-align: center;">+</td>
                                    <td style="text-align: center;" id="RaceCha">
                                        <span id="RacialCha">0</span>
                                        <div id="customCha" class="inputCont" style="display:none">
                                            <table>
                                                <tbody>
                                                    <tr class="updown">
                                                        <td class="abilityCount" id="abilityCount">
                                                            <input type="number" id="RacialCha" value="0"
                                                                min="-4" max="4" step="1"
                                                                readonly="Readonly" onchange="getTotals()">
                                                        </td>
                                                        <td class="updownCont">
                                                            <button class="up" onclick="increment(event)"
                                                                value="RacialCha"></button>
                                                            <button class="down" onclick="decrement(event)"
                                                                value="RacialCha"></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                    <td style="text-align: center;">=</td>
                                    <td style="text-align: center;" class="Total"><span id="TotalCha">8</span></td>
                                    <td style="text-align: center;" class="Modifier"><span id="ModifierCha">-1</span>
                                    </td>
                                    <td style="text-align: center;"><span id="PointcostCha">0</span></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td style="text-align: center;"><input type="button"
                                            title="Reset allocated points" class="Reset" value="Reset"
                                            onclick="pointsReset()"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td style="text-align: center;">
                                        <h4>Total Points</h4>
                                    </td>
                                    <td style="text-align: center;"><span class="TotalCost"
                                            id="TotalCost">0</span>/<span id="AvailablePointsTotal">27</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <div class="traits">
                    <div class="RacialTraits" id="RacialTraits">
                        <dl id="RacialTraits">
                            <h3 class="raceHead">Racial Traits</h3>
                        </dl>
                    </div>
                    <div class="SubraceTraits" id="SubraceTraits">
                        <dl id="SubraceTraits"></dl>
                    </div>
                    <div class="script">
                        <p>
                            <script src="js/pointbuy.js" type="text/javascript"></script>
                        </p>
                    </div>
                </div>
                <div>
                    <textarea id="urlCopied" style="display:none" rows="1" cols="1"></textarea>
                    <h5>Trovato un bug? Hai solo voglia di scriverci? <a href="{{ url('/#contact_us') }}"
                            rel="noopener noreferrer" class="text-danger">Contattaci.</a></h5>
                </div>
            </div>
        </div>
    </div>


</body>
