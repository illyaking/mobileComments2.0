<?php
header('Content-Type: text/javascript');
require_once('constants.php');
?>

$(document).ready(function () {

document.getElementById("commodity").focus();

// Special Buttons
    
   var special = [" ", ",", ".", "\n", "Reference: ~~ADD WEBSITE ADDRESS~~."];
   
    $("#comma").on("click", function () {
        $('#description').val(($('#description').val() + special[1]));
    });
    
    $("#period").on("click", function () {
        $('#description').val(($('#description').val() + special[2]));
    });
    
    $("#return").on("click", function () {
        $('#description').val(($('#description').val() + special[3]));
    });
    
    $("#addURL").on("click", function () {
        $('#description').val(($('#description').val() + special[3] + special[4]));
    });

var conjuction = ["a", "and", "in", "on", "to"];

    $("#a").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + conjuction[0]));
    });

    $("#and").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + conjuction[1]));
    });
    
    $("#in").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + conjuction[2]));
    });

    $("#on").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + conjuction[3]));
    });
    
    $("#to").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + conjuction[4]));
    });

// States Buttons

var states = [ "KD,", "KD Flat,", "SU,", "nested", "not", "banded", "wrapped", "pallet", "pallets", "skid", "skids"];
    
    $("#kdText").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + states[0]));
    });
    
    $("#kdFlat").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + states[1]));
    });
    
    $("#suText").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + states[2]));
    });
    
    $("#nested").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + states[3]));
    });
    
    $("#not").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + states[4]));
    });
    
    $("#banded").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + states[5]));
    });
    
    $("#wrapped").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + states[6]));
    });
    
    $("#pallet").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + states[7]));
    });
    
    $("#pallets").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + states[8]));
    });
    
    $("#skid").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + states[9]));
    });
    
    $("#skids").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + states[10]));
    });

// Buttons 

var packaging = [ "bag", "bags", "bottle", "bottles", "box", "boxes", "bundle", "bundles", "carton", "cartons", "crate", "crates", "drum", "drums", "frame", "frames", "gaylord", "gaylords", "keg", "kegs",
                  "pail", "pails", "roll", "rolls", "tank", "tanks", "tote", "totes", "tube", "tubes", "bulk commodity tote", "bulk commodity totes", "loose", "machine pressed", "plastic", "metal", "wooden", "fiberboard", "cardboard"];  


    $("#bag").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[0] + special[1]));
        });

    $("#bags").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[1] + special[1]));
        });

    $("#bottle").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[2] + special[1]));
        });

    $("#bottles").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[3] + special[1]));
        });

    $("#box").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[4] + special[1]));
        });

    $("#boxes").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[5] + special[1]));
        });

    $("#bundle").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[6] + special[1]));
        });
        
    $("#bundles").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[7] + special[1]));
        });

    $("#carton").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[8] + special[1]));
        });
        
    $("#cartons").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[09] + special[1]));
        });

    $("#crate").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[10] + special[1]));
        });
        
    $("#crates").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[11] + special[1]));
        });
    
    $("#drum").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[12] + special[1]));
        });

    $("#drums").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[13] + special[1]));
        });

    $("#frame").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[14] + special[1]));
        });

    $("#frames").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[15] + special[1]));
        });

    $("#gaylord").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[16] + special[1]));
        });

    $("#gaylords").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[17] + special[1]));
        });

    $("#keg").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[18] + special[1]));
        });

    $("#kegs").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[19] + special[1]));
        });

    $("#pail").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[20] + special[1]));
        });

    $("#pails").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[21] + special[1]));
        });
                     
    $("#roll").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[22] + special[1]));
        });

    $("#rolls").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[23] + special[1]));
        });
    
    $("#tank").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[24] + special[1]));
        });
                     
    $("#tanks").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[25] + special[1]));
        });
              
    $("#tote").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[26] + special[1]));
        });

    $("#totes").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[27] + special[1]));
        });

    $("#tube").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[28] + special[1]));
        });
              
    $("#tubes").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[29] + special[1]));
        });

    $("#bulkCommodityTote").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[30] + special[1]));
        });
              
    $("#bulkCommodityTotes").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[31] + special[1]));
        });

    $("#loose").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[32] + special[1]));
        });
    
    $("#machinePressed").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[33]));
        });
                 
    $("#plastic").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[34]));
        });
               
    $("#metal").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[35]));
        });
        
    $("#wooden").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[36]));
        });
    
    $("#fiberboard").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[37]));
        });

    $("#cardboard").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[38]));
        });

// Shipper's Description

   var shipper = [
   "Originally billed as ~~ ADD COMMODITY~~ at class ~~ ADD CLASS ~~ with NMFC ~~ ADD NMFC ~~. Change due to ~~proper description/more specific description/ or other characteristics~~, NMFC, and lower/higher density.",
   "Originally tendered as ~~ ADD COMMODITY~~ at class ~~ ADD CLASS ~~ with NMFC ~~ ADD NMFC ~~. Change due to ~~proper description/more specific description/ or other characteristics~~, NMFC, and lower/higher density.",
   "Originally billed as ~~ ADD COMMODITY~~ at class ~~ ADD CLASS ~~ with no NMFC ~~ ADD NMFC ~~. Change due to ~~proper description/more specific description/ or other characteristics~~, NMFC, and lower/higher density.",
   "Originally tendered as ~~ ADD COMMODITY~~ at class ~~ ADD CLASS ~~ with no NMFC ~~ ADD NMFC ~~. Change due to ~~proper description/more specific description/ or other characteristics~~ NMFC, and lower/higher density.",
   "Correctly rated and described.",
   "Originally billed as ~~ ADD COMMODITY~~ at class ~~ ADD CLASS ~~ with an invalid NMFC. Change due to ~~proper description/more specific description/ or other characteristics~~, NMFC, and lower/higher density."
   ];

    $("#billedAs").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + shipper[0]));
        });
        
    $("#tenderedAs").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + shipper[1]));
        });

    $("#noBill").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + shipper[2]));
        });
        
    $("#noTendered").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + shipper[3]));
        });
        
    $("#correct").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + shipper[4]));
        });
    
    $("#eighteighteight").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + shipper[5]));
        });

// FXF and NMFC Special Rules

   var itemRules = [
    "No value was declared on BOL. Per FXF ITEM 420 Sec 5. Line A.1, The class containing the maximum liability not exceeding $5.00 per pound was applied.",
    "Per NMFC ITEM 422, Shipment reclassified to highest article in combination.",
    "Per NMFC ITEM 424 (Referring to Classification of Parts or Pieces of a Complete Article), The classification was applied for the complete article.",
    "Per NMFC ITEM 425 (Referring to recondition articles), this freight has been reconditioned and is considered new and not used.",
    "Shipment was not itemized and was billed as ~~ENTER IN BILLED DESCRIPTION~~ with NMFC ~~ENTER NMFC~~ class ~~ENTER CLASS~~ at ~~ENTER IN WEIGHT~~ lbs. Mixed rates apply as stated in FXF ITEM 640- UNLESS OTHERWISE PROVIDED, SHIPMENTS THAT CONSIST OF DIFFERENTLY CLASSED ARTICLES CONTAINED IN OR ON ONE HANDLING UNIT THAT HAVE BEEN INSPECTED AND THE INSPECTION DETERMINES THE SHIPPER’S INFORMATION WAS INACCURATE, THE HANDLING UNIT WILL BE RATED AT THE CLASS SHOWN IN PARAGRAPH 2 BASED ON THE DENSITY OF THE UNIT USING THE WEIGHT AND MEASUREMENTS.",
    "Per FXF ITEM 750-8, This freight is being delivered to a limited access location listed in ITEM 750-8. The Limited Access Location charge applies.",
    "Commodity occupies ~~ADD LENGTH~~ inches by ~~ADD WIDTH~~ inches by ~~ADD HEIGHT~~ inches, which is ~~ADD PERCENTAGE~~% of a lift truck skids, pallets or platforms with a surface area of ~~ADD LENGTH~~ inches and ~~ADD WIDTH~~ inches or ~~ADD SQUARE INCHES~~ square inches of space. Shipment also meets the stability requirement of NMFC item 680 note c. FXF ITEM 680 applies.",
    "Commodity is ~~ADD LENGTH~~ inches by ~~ADD WIDTH~~ inches by ~~ADD HEIGHT~~ inches, resulting in  occupying ~~ADD PERCENTAGE~~% of the container.",
    "PER NMFC ITEM 250100 sec. 3(a), this freight was opened to verify contents.",
    "No NMFC on OBOL - *NOBI*",
    "Incorrect NMFC in OBOL - *ICBI*",
    "Cannot Dimension shipment - *CDMI*"
    ];

    $("#item420").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + itemRules[0]));
    });

    $("#item422").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + itemRules[1]));
    });
    
    $("#item424").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + itemRules[2]));
    });
    
    $("#item425").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + itemRules[3]));
    });
    
    $("#item640").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + itemRules[4]));
    });
    
    $("#item750Eight").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + itemRules[5]));
    });
    
    $("#item680Pallet").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + itemRules[6]));
    });

    $("#item680Container").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + itemRules[7]));
    });
    
    $("#item250100").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + itemRules[8]));
    });
    
    $("#nobi").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + itemRules[9]));
    });
    
    $("#icbi").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + itemRules[10]));
    });
    
    $("#cdmi").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + itemRules[11]));
    });

// Accessorials

    var accessorials = [
    "freight is equal or over 8 feet but less than 12 feet at ~~ENTER LENGTH~~, over length charge applies.",
    "freight is equal or over 12 feet at ~~ENTER LENGTH~~, extreme length charge applies.",
    "**Freight is over 750 CUFT at ~~ADD CUFT~~ CUFT and under 4 PCF at ~~ADD PCF~~ PCF, Cubic Capacity and Load charge applies.",
    "**Shipment overall dimensions is at ~~Enter Overall Dims Here~~. Shipment utilizes ~~Enter Lineal Feet Here~~ linear feet in length.",
    "**Shipment exceeds 15,000 lbs., actual weight at ~~Enter Weight Here~~ lbs.",
    "One more of the largest handling unit will fit in a pup trailer.**",
    "One more of the largest handling unit will not fit in a pup trailer.**",
    "**Per ITEM 390 line 4, Combine with PRO ~~Enter PRO number here~~ with ~~Enter Handling Units here~~ HU at ~~Enter weight here~~ lbs.**",
    "PRO ~~Enter PRO number here~~ with ~~Enter Handling Units here~~ HU at ~~Enter weight here~~~ lbs.,",
    "and PRO ~~Enter PRO number here~~ with ~~Enter Handling Units here~~ HU at ~~Enter weight here~~~ lbs.**",
    "**Overflow at ~~Quantity of Overflow~~ pallets with a total weight of ~~Enter Overflow Weight Here~~ lbs.**",
    "**Shipment also qualifies for the Cubic Capacity and Density tariff rule.**"
    ];
    
    $("#overLength").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + accessorials[0]));
    });
    
    $("#extremeLength").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + accessorials[1]));
    });

    $("#ccd").on("click", function () {
        $('#description').val(($('#description').val() + special[3] + accessorials[2]));
    });

    $("#capload").on("click", function () {
        $('#description').val(($('#description').val() + special[3] + accessorials[3]));
    });

    $("#capload15k").on("click", function () {
        $('#description').val(($('#description').val() + special[3] + accessorials[4]));
    });

    $("#oneMore").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + accessorials[5]));
    });

    $("#noMore").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + accessorials[6]));
    });

    $("#multiplePro").on("click", function () {
        $('#description').val(($('#description').val() + special[3] + accessorials[7]));
    });

    $("#addPro").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + accessorials[8]));
    });

    $("#lastPro").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + accessorials[9]));
    });

    $("#overflow").on("click", function () {
        $('#description').val(($('#description').val() + special[3] + accessorials[10]));
    });

    $("#qualifiesCCD").on("click", function () {
        $('#description').val(($('#description').val() + special[3] + accessorials[11]));
    });

// Finish Buttons

    $("#clear").on("click", function () {
        $("#commodity").val("");
        $("#description").val("");
        $("#commodity").focus();
    });

    $("#clearComments").on("click", function () {
        $("#description").val("");
        $("#description").focus();
    });
    
    $('#commodityButton').click(function () {
        $('#description').val($('#commodity').val() + ",");
    });
    
    $('#delete').click(function () {
        var inputString = $('#description').val();
        var shortenedString = inputString.substr(0, (inputString.length - 1));
        $('#description').val(shortenedString);
    });
      
    $("#copyText").click(function () {
        $("textarea").select();
        document.execCommand('copy');
    });

          
});