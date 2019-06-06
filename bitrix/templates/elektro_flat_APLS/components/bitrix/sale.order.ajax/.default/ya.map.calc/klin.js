var ORDER_AJAX_DELIVERY_MAP = {
    CITY_MIN_PRICE: 450, // минмиальаня цена по городу
    CITY_MAX_PRICE: false, // максимальаня цена по городу
    CITY_PROMO_PRICE: 450,
    CITY_PROMO_LIMIT_ORDER_COST: 15000,
    CITY_FREE_DELIVERY_PRICE: 450,
    CITY_FREE_DELIVERY_TEXT: '',
    CITY_FREE_DELIVERY_LIMIT_ORDER_COST: 15000,
    CITY_CONDITIONS: [],
    OUTSIDE_MIN_PRICE: 500, // минимальаня цена за городом
    OUTSIDE_MAX_PRICE: false, // максимальаня цена за городом
    OUTSIDE_CONDITIONS: [
        { KM_MIN: 1, KM_MAX: false, KM_PRICE: 40, FIX_PRICE: 500, FULL_PATH_CALC: true },
    ],
    MAP_CENTER: [56.331693, 36.728716],
    MAP_ZOOM: 11,
    MAP_FROM: "г Клин",
    MAP_POLYGON: [
        [56.3610888379983,36.713488911094245],
        [56.36223266291896,36.71177994066362],
        [56.36386478055091,36.71135843056068],
        [56.36440786857807,36.7134918557852],
        [56.36441213762982,36.71352242914226],
        [56.365488306740026,36.71230845751551],
        [56.36701463078017,36.71669712790384],
        [56.36787571426771,36.715897095096615],
        [56.36885586618607,36.71430312842108],
        [56.36972052747803,36.71304638556067],
        [56.37002080863069,36.71396612737884],
        [56.37311240375469,36.71079180042275],
        [56.373420507523406,36.708312916239585],
        [56.37628471277804,36.70458421383351],
        [56.37258520190075,36.69231029927308],
        [56.37372355564142,36.69302671856391],
        [56.37414269589348,36.692532694265466],
        [56.374516592365126,36.69003151640728],
        [56.37565729546096,36.68728375126969],
        [56.377783821422675,36.68387376775341],
        [56.379768614117715,36.682381827989815],
        [56.380202203768675,36.68124672986124],
        [56.3796228899795,36.679484513634826],
        [56.38034529947354,36.67893025782793],
        [56.38176626773326,36.67977387351736],
        [56.38257838675798,36.67983197859869],
        [56.383654986536385,36.6789454002919],
        [56.38441536445783,36.67759113392184],
        [56.383233902831265,36.675271230654424],
        [56.382704195772085,36.67490803479988],
        [56.38226380208397,36.67441214363535],
        [56.38143061871965,36.67466490757029],
        [56.3805974170539,36.673570579037666],
        [56.381145120104904,36.67307705895175],
        [56.38107376332562,36.6726693695543],
        [56.37529659705102,36.67855899980964],
        [56.375317412907926,36.676931032626015],
        [56.37464463374483,36.67426388579903],
        [56.37337048385693,36.67428942379919],
        [56.3692145879612,36.66350694355926],
        [56.35993660551625,36.67865606007527],
        [56.3637957593807,36.68994279560994],
        [56.35899454403608,36.69489238291251],
        [56.35780230289514,36.69125890136743],
        [56.35646586929647,36.692596888348355],
        [56.35679494469971,36.69451937199039],
        [56.35589253660287,36.6954941953243],
        [56.35501689060742,36.696308896680364],
        [56.35312257377011,36.690779644822534],
        [56.34918404098218,36.69682882018845],
        [56.34794997696965,36.690840241495465],
        [56.34512407585516,36.68342656831822],
        [56.34376187844864,36.6859199085999],
        [56.34499374197468,36.697568057052955],
        [56.34186857382274,36.69924635346456],
        [56.336374619366275,36.70395382950323],
        [56.335558452769426,36.69864517385926],
        [56.33450879631026,36.69862242398239],
        [56.33378169679291,36.693354565477264],
        [56.33378136476847,36.69099015490286],
        [56.33430549938806,36.688775948033324],
        [56.33440019215661,36.68700828563695],
        [56.33216445935823,36.6812256250114],
        [56.33228217200276,36.673340302385625],
        [56.32920974954423,36.67329743768757],
        [56.32883437528982,36.673768460083366],
        [56.32860816091804,36.67539449391308],
        [56.32815669633473,36.67721686642489],
        [56.32718066867991,36.678738831526864],
        [56.32702937027779,36.68658515786705],
        [56.32523649358817,36.68679555873502],
        [56.32531085028673,36.68337542210927],
        [56.324005004037694,36.68328339176575],
        [56.322442444888786,36.689181937850336],
        [56.32145152632205,36.691108684391644],
        [56.321007810998495,36.69421024957404],
        [56.320931192431495,36.695319404326405],
        [56.320420237458855,36.6949694885654],
        [56.32054302143455,36.6924075494577],
        [56.31989428869168,36.69120537937072],
        [56.31890682678877,36.69459729931634],
        [56.31867284532375,36.69444883247364],
        [56.31677389155697,36.69297829048222],
        [56.31533703423403,36.69925077101337],
        [56.31387045340754,36.69914813694893],
        [56.31439519477986,36.690929848527325],
        [56.31180719556726,36.69031830487237],
        [56.311938388706984,36.689535099839595],
        [56.31096039262326,36.68882699666009],
        [56.31093870435874,36.68733569204517],
        [56.30967659321301,36.68661686362699],
        [56.309685157027594,36.69698916396432],
        [56.31044282182087,36.70932235716792],
        [56.3115936789355,36.71165130689879],
        [56.31169579813979,36.713262216919915],
        [56.31311051439775,36.71493908456998],
        [56.31365781842131,36.716018306624974],
        [56.31675046801869,36.71856298883297],
        [56.31687831618204,36.72112034793948],
        [56.31461849685491,36.72537413667231],
        [56.31330072480858,36.72979958678259],
        [56.31327315928726,36.73155578977923],
        [56.31449690003002,36.732986801576935],
        [56.3144714375184,36.732243936256616],
        [56.315897218471974,36.73157359715616],
        [56.317156065228076,36.73207827875738],
        [56.31747171866341,36.73265848851878],
        [56.31802804677325,36.73364724666318],
        [56.317503192711925,36.73860737937729],
        [56.316079183468155,36.73758423202438],
        [56.314646368822025,36.737748077547096],
        [56.31462440130835,36.739191567542385],
        [56.3135706549144,36.73916030412422],
        [56.31368479532437,36.744419279974686],
        [56.31034405633647,36.74210835209014],
        [56.3077187077445,36.74065573109075],
        [56.30604617801734,36.74676271138174],
        [56.31089727236368,36.7534443645731],
        [56.310905713811195,36.757293605045476],
        [56.31650399826118,36.76894029766003],
        [56.321057719583806,36.762013595578686],
        [56.325156413164,36.770177657845004],
        [56.32667673738794,36.76763319133582],
        [56.3337758673351,36.76201518928186],
        [56.33410675875767,36.76319731526956],
        [56.333770145384925,36.76412194919211],
        [56.336297531000746,36.77206067010008],
        [56.33994504250759,36.775321618486466],
        [56.34306929270407,36.775357664431986],
        [56.34326376812104,36.77857357192117],
        [56.344939695837034,36.78062015423088],
        [56.34879176569918,36.77673109594657],
        [56.3527301484014,36.774978684869694],
        [56.35102774404801,36.76990820317263],
        [56.35129248373003,36.765131994825836],
        [56.35005862690101,36.760178793181325],
        [56.35080782744757,36.754289546010675],
        [56.352353840048096,36.748662361498695],
        [56.35263410839793,36.74667688069278],
        [56.35123420345366,36.741902548646436],
        [56.34854743284382,36.74146266636802],
        [56.34407303165566,36.739392001008206],
        [56.342228900720194,36.736768800592074],
        [56.34083755045759,36.72727914509742],
        [56.34166271571681,36.72429503533842],
        [56.34382254896448,36.7253449679382],
        [56.346116196494656,36.7232820447457],
        [56.351441766142955,36.72443478570299],
        [56.35400288707376,36.72980484480921],
        [56.355074373005884,36.7293462602946],
        [56.35635954972834,36.7276347620927],
        [56.35392644928953,36.72147093724195],
        [56.35334893357684,36.72191472706726],
        [56.35290812630795,36.72105642018309],
        [56.352538797365504,36.71981187519933],
        [56.3610888379983,36.713488911094245],
    ]
};