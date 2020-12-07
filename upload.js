//show additional fields function
function unhide(n) {
    var btn = document.getElementById('btn'+n);
    if (btn.style.display = 'inline'){
        btn.style.display = 'none'
    }else{
        btn.style.display = 'inline'
    }
    var field = document.getElementById("hidden"+n);
    if (field.style.display === "none") {
        field.style.display = "block";
    /*} else {
        field.style.display = "none"; */
    }
}

function hide(n) {
    var field = document.getElementById("hidden"+n);
    var btn = document.getElementById('btn'+n);
    if (field.style.display === "none") {
        field.style.display = "none";
    } else {
        field.style.display = "none";
        btn.style.display = 'inline';
    }
}

const mioForm = document.getElementById('BIGFORM');
//authentication  identity[], credential[]
const omeka = 'http://localhost:80/omeka-s/api/items?key_identity=IDENTITY&key_credential=CREDENTIAL';

mioForm.addEventListener('submit', function(creation) {
    creation.preventDefault();

    //identification (father item)
    var titolo = document.getElementById("title").value
    var desc = document.getElementById("description").value
    var date = document.getElementById("date").value
    var SUnum = document.getElementById("sunumber").value

    //registry
    var acronym = document.getElementById("acronym").value
    if (document.getElementById("acronym1").value != null){
        var otheracronyms = document.getElementById("acronym1").value
    }if (document.getElementById("acronym2").value != null){
        var otheracronyms2 = document.getElementById("acronym2").value
    }if (document.getElementById("acronym3").value != null){
        var otheracronyms3 = document.getElementById("acronym3").value
    }if (document.getElementById("acronym4").value != null){
        var otheracronyms4 = document.getElementById("acronym4").value
    }
    var trench = document.getElementById("trench").value
    var sector = document.getElementById("sector").value
    var definition = document.getElementById("definition").value
    
    //description
    var formationProcess = document.getElementById("formationprocess").value
    var otherformationProcess = document.getElementById("oformationprocess").value
    var limit = document.getElementById("limit").value
    var description = document.getElementById("description").value
    
    //stratigraphy
    var filledby = document.getElementById("filledby").value
    var cuts = document.getElementById("cuts").value

    //datation


    //sampling
    var stratreliability = document.getElementById("stratreliability").value
    var soilsamplesperc = document.getElementById("soilsamplesperc").value
    
    var reg = {
        "dcterms:title": [
            {
                "type": "literal",
                "property_id": 1,
                "property_label": "Title",
                "is_public": true,
                "@value": new String(titolo+'-Reg')
            }
        ],
        "suReg:hasAcronym_f": [
            {
                "type": "literal",
                "property_id": 238,
                "property_label": "ACRONYM",
                "is_public": true,
                "@value": new String(acronym)
            }
        ],
        "suReg:hasOtherAcronym_f": [    //altri acronimi
            {
                "type": "literal",
                "property_id": 238,
                "property_label": "ACRONYM",
                "is_public": true,
                "@value": new String(otheracronyms)
            }
        ],
        "suReg:hasOtherAcronym2_f": [    //altri acronimi
            {
                "type": "literal",
                "property_id": 238,
                "property_label": "ACRONYM",
                "is_public": true,
                "@value": new String(otheracronyms2)
            }
        ],
        "suReg:hasOtherAcronym3_f": [    //altri acronimi
            {
                "type": "literal",
                "property_id": 238,
                "property_label": "ACRONYM",
                "is_public": true,
                "@value": new String(otheracronyms3)
            }
        ],
        "suReg:hasOtherAcronym4_f": [    //altri acronimi
            {
                "type": "literal",
                "property_id": 238,
                "property_label": "ACRONYM",
                "is_public": true,
                "@value": new String(otheracronyms4)
            }
        ],
        "suReg:hasTrench_f": [
            {
                "type": "literal",
                "property_id": 251,
                "property_label": "TRENCH",
                "is_public": true,
                "@value": new String(trench)
            }
        ],
        "suReg:hasSector_f": [
            {
                "type": "literal",
                "property_id": 248,
                "property_label": "SECTOR",
                "is_public": true,
                "@value": new String(sector)
            }
        ],
        "suReg:hasDefinition_f": [
            {
                "type": "literal",
                "property_id": 243,
                "property_label": "DEFINITION",
                "is_public": true,
                "@value": new String(definition)
            }
        ],
        "suReg:hasPosition_f": [
            {
                "type": "literal",
                "property_id": 246,
                "property_label": "POSITION",
                "is_public": true,
                "@value": "dolor sit amet"
            }
        ]
    }
    var des = {
        "dcterms:title": [
            {
                "type": "literal",
                "property_id": 1,
                "property_label": "Title",
                "is_public": true,
                "@value": new String(titolo+'-Desc')
            }
        ],
        "suDesc:hasFormationProcess_f": [
            {
                "type": "customvocab:3",
                "property_id": 441,
                "property_label": "FORMATION PROCESS",
                "is_public": true,
                "@value": new String(formationProcess)
            }
        ],
        "suDesc:hasOtherFormationProcess_f": [
            {
                "type": "literal",
                "property_id": 450,
                "property_label": "OTHER FORMATION PROCESS",
                "is_public": true,
                "@value": new String(otherformationProcess)
            }
        ],
        "suDesc:hasLimit_f": [
            {
                "type": "customvocab:7",
                "property_id": 443,
                "property_label": "LIMITS OF THE UNIT",
                "is_public": true,
                "@value": new String(limit)
            }
        ],
        "suDesc:hasDescription_f": [
            {
                "type": "literal",
                "property_id": 439,
                "property_label": "DESCRIPTION",
                "is_public": true,
                "@value": new String(description)
            }
        ]
    }
    var strat = {
        "dcterms:title": [
            {
                "type": "literal",
                "property_id": 1,
                "property_label": "Title",
                "is_public": true,
                "@value": new String(titolo+'-Strat')
            }
        ],
        "suStrat:isFilledBys_f": [
            {
                "type": "resource:item",
                "property_id": 277,
                "property_label": "is filled by",
                "is_public": true,
                "@id": new String(filledby), //url
                "value_resource_id": 604, //filledby id
                "value_resource_name": "items",
                "url": null,
                "display_title": "titolo oggetto con id 604"
            }
        ],
        "suStrat:cuts_f": [
            {
                "type": "resource:item",
                "property_id": 268,
                "property_label": "cuts",
                "is_public": true,
                "@id": new String(cuts), //url
                "value_resource_id": 682, //cuts id
                "value_resource_name": "items",
                "url": null,
                "display_title": "titolo oggetto con id 682"
            }
        ]
    }
    var dat = {
        "dcterms:title": [
            {
                "type": "literal",
                "property_id": 1,
                "property_label": "Title",
                "is_public": true,
                "@value": new String(titolo+'-Dat')
            }
        ],
        "suDat:hasDatingElement_f": [
            {
                "type": "resource:item",
                "property_id": "187",
                "property_label": "DATING ELEMENT",
                "is_public": true,
                "@id": "url del dating element",
                "value_resource_id": 716, //id
                "value_resource_name": "items",
                "display_title": "AF 129" //corrisp a item id 716
            }
        ]
    }
    var sam = {
        "dcterms:title": [
            {
                "type": "literal",
                "property_id": 1,
                "property_label": "Title",
                "is_public": true,
                "@value": new String(titolo+'-Sam')
            }
        ],
        "suDat:hasStratigraphicReliability_f": [     //esempio trovato in item 703
            {
                "type": "literal",
                "property_id": 362,
                "property_label": "STRATIGRAPHIC RELIABILITY",
                "is_public": true,
                "@value": new String(stratreliability)
            }
        ],
        "suDat:hasSoilSamples_f": [     //esempio trovato in item 703
            {
                "type": "literal",
                "property_id": 360,
                "property_label": "SOIL SAMPLES (%)",
                "is_public": true,
                "@value": new String(soilsamplesperc)
            }
        ]
    }

    const configReg = {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify(reg)
    }
    const configDes = {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify(des)
    }
    const configStrat = {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify(strat)
    }
    const configDat = {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify(dat)
    }
    const configSam = {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify(sam)
    }
    
    async function father() {
        let rispostaReg = await postReg();
        let rispostaDes = await postDes();
        let rispostaStrat = await postStrat();
        let rispostaDat = await postDat();
        let rispostaSam = await postSam();
        postID(rispostaReg, rispostaDes, rispostaStrat, rispostaDat, rispostaSam);

        
        async function postReg() {
            let response = await fetch(omeka, configReg);
            let risposta = await response.json();
            //console.log(risposta['o:id'], risposta['@id'],'a');
            return risposta;
        }
        async function postDes() {
            let response = await fetch(omeka, configDes);
            let risposta = await response.json();
            //console.log(risposta['o:id'], risposta['@id'],'b');
            return risposta;
        }
        async function postStrat() {
            let response = await fetch(omeka, configStrat);
            let risposta = await response.json();
            //console.log(risposta['o:id'], risposta['@id'],'c');
            return risposta;
        }
        async function postDat() {
            let response = await fetch(omeka, configDat);
            let risposta = await response.json();
            //console.log(risposta['o:id'], risposta['@id'],'d');
            return risposta;
        }
        async function postSam() {
            let response = await fetch(omeka, configSam);
            let risposta = await response.json();
            //console.log(risposta['o:id'], risposta['@id'],'e');
            return risposta;
        }

        async function postID(rispostaReg, rispostaDes) {
            var reg_id = rispostaReg['o:id'];
            var reg_url = rispostaReg['@id'];
            var des_id = rispostaDes['o:id'];
            var des_url = rispostaDes['@id'];
            var strat_id = rispostaStrat['o:id'];
            var strat_url = rispostaStrat["@id"];
            var dat_id = rispostaDat['o:id'];
            var dat_url = rispostaDat['@id'];
            var sam_id = rispostaSam['o:id'];
            var sam_url = rispostaSam['@id'];
            console.log('Item figli: ',reg_id, des_id, strat_id, dat_id, sam_id);
            var identification = {
                "dcterms:title": [
                    {
                        "type": "literal",
                        "property_id": 1,
                        "property_label": "Title",
                        "is_public": true,
                        "@value": new String(titolo)
                    }
                ],
                "suReg:hasNumber_f": [
                    {
                        "type": "literal",
                        "property_id": 245,
                        "property_label": "SU number",
                        "is_public": true,
                        "@value": new String(SUnum)
                    }
                ],
                "dcterms:description": [
                    {
                        "type": "literal",
                        "property_id": 4,
                        "property_label": "Description",
                        "is_public": true,
                        "@value": new String(desc)
                    }
                ],
                "dcterms:date": [
                    {
                        "type": "literal",
                        "property_id": 7,
                        "property_label": "Description",
                        "is_public": true,
                        "@value": new String(date)
                    }
                ],
                "suReg:hasRegistrySection": [
                    {
                        "type": "resource:item",
                        "property_id": 231,
                        "property_label": "REGISTRY SECTION",
                        "is_public": true,
                        "@id" : new String(reg_url),
                        "value_resource_id": new String(reg_id),
                        "value_resource_name": "items",
                        "url" : null,
                        "display_title" : "SU"+new String(SUnum)+"-Reg"
                    }
                ],
                "suReg:hasDescriptiveSection": [
                    {
                        "type": "resource:item",
                        "property_id": 428,
                        "property_label": "DESCRIPTIVE SECTION",
                        "is_public": true,
                        "@id" : new String(des_url),
                        "value_resource_id": new String(des_id),
                        "value_resource_name": "items",
                        "url" : null,
                        "display_title" : "SU"+new String(SUnum)+"-Desc"
                    }
                ],
                "suReg:hasStratigraphySection": [
                    {
                        "type": "resource:item",
                        "property_id": 296,
                        "property_label": "STRATIGRAPHY",
                        "is_public": true,
                        "@id" : new String(strat_url),
                        "value_resource_id": new String(strat_id),
                        "value_resource_name": "items",
                        "url" : null,
                        "display_title" : "SU"+new String(SUnum)+"-Strat"
                    }
                ],
                "suReg:hasDatationSection": [
                    {
                        "type": "resource:item",
                        "property_id": 293,
                        "property_label": "DATATION SECTION",
                        "is_public": true,
                        "@id" : new String(dat_url),
                        "value_resource_id": new String(dat_id),
                        "value_resource_name": "items",
                        "url" : null,
                        "display_title" : "SU"+new String(SUnum)+"-Dat"
                    }
                ],  
                "suReg:hasSamplingSection": [
                    {
                        "type": "resource:item",
                        "property_id": 353,
                        "property_label": "SAMPLING SECTION",
                        "is_public": true,
                        "@id" : new String(sam_url),
                        "value_resource_id": new String(sam_id),
                        "value_resource_name": "items",
                        "url" : null,
                        "display_title" : "SU"+new String(SUnum)+"-Sam"
                    }
                ]         
            }
            const configpadre = {
                method: 'POST',
                mode: 'cors',
                headers: { 'Accept': 'application/json',
                        'Content-Type': 'application/json' },
                body: JSON.stringify(identification)
            }
            let output = await fetch(omeka, configpadre);
            let conferma = await output.json();
            console.log('Item padre: ',conferma['o:id']);
            return conferma;
        }

    }
    father().then(data => console.log('Creazione riuscita! :-)'))
    .catch(reason => console.log(reason.message));

});