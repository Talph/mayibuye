<template>
    <vue-card-stack :cards="cards" :stack-width="1140" :card-width="1099">
  <template v-slot:card="{ card }">
    <div
      style="width: 100%; height: 100%;"
      :style="{ background: card.background }"
    >
<div class="col-md-12 p-4">
    <div class="row">
    <div class="col-md-6">
        <div class="content">
        <div class="title-top"><span class="title italics">Project title: </span><h4>{{card.title}}</h4></div>
        <div class="text desc-proj"><p>
          <p class="p proj-summary italics">Summary: </p><p>{{card.desc}}
          </p>
             <div class="clienta text proj__clienta">
        <p class="proj__clienta italics">Client:</p> {{card.client}}
        </div>
        </div>
            </div>
    </div>
    <div class="col-md-6">
    <div class="img-proj">
    <img class="border-radius-5" :src="card.img" width="100%">    
    </div>    
    </div>    

    </div>
</div>

    </div>
  </template>

  <template v-slot:nav="{onNext, onPrevious }">
    <nav class="nav">
      <!-- <div class="counter">{{activeCardIndex + 1}}/{{cards.length}}</div> -->
      <button v-on:click="onPrevious" class="button shadow-sm p-2 btn nav-p nav-p-left">
        <span class="chevron left"></span>
      </button>
      <button v-on:click="onNext" class="button shadow-sm p-2 btn nav-p nav-p-right">
        <span class="chevron right"></span> 
      </button>
    </nav>
  </template>
</vue-card-stack>
</template>

<script>
import VueCardStack from "vue-card-stack";

export default {
  components: {
    VueCardStack,
  },
  data() {
    return {
      cards: [
        { background: "#00abbc", title: 'IBIKA-CENTANE BULK WATER SUPPLY AND RETICULATION', desc: 'The Project IBIKA – CENTANI PHASE 3 CONTRACT 2 BULK WATER SUPPLY AND RETICULATION is in Mhlahlane, Willowvale, Eastern Cape. The Project is part of a major upgrade of bulk water reticulation as an answer tor the drought that has hit the Mbhashe region. This Contract entails 37 km of pipelines, three river crossings, chambers and one 50 Kl reservoir.', client: 'Amathole Discrict Municipality', img: '/projects/Ibika-centane-bulk-water.jpg'},
        { background: "#00abbc", title: 'SOUTH ROAD BRIDGE CONSTRUCTION', desc: 'The Project JRA/19/007 – South Road Bridge Construction in Johannesburg. The project comes as a relief to the flooding the area encounters during rainy season. The Project entails 3.2 kms of bulk stormwater, reinstating G5 and G1 and reinstating 30mm continuously graded asphalt.', client: 'Johannesburg Roads Agency', img: '/projects/south-road-bridge.jpg' },
        { background: "#e2c58a", title: 'CONSTRUCTION OF SPORTS FIELDS', desc: 'Framework Contract for the Construction of Sports Fields within Elundini Municipality in the Eastern Cape.', client: 'Elundini Municipality', img: '/projects/Construction-of-Sports-Fields.jpg' },
        { background: "#fc8890", title: 'BOND STREET STORMWATER UPGRADE', desc: 'These Storm-water Upgrade and Associated Civil Works took place in Ferndale, a small surburb in Randburg in the city of Johanneburg.', client: 'Johannesburg Roads Agency', img: '/projects/Bond-Street-Stormwater-Upgrade.jpg' },
        { background: "#b35d7f", title: 'BRT SELBY PHASE 2C', desc: 'Alterations of Bus Depot, and Associated Building Works', client: 'Johannesburg Development Agency', img: '/projects/BRT-SELBY-PHASE-2C.jpg' },
        { background: "#b35d7f", title: 'DRIEZIEK PUBLIC TRANSPORT FACILITY', desc: 'Buildings and Associated Civil Works', client: 'Johannesburg Development Agency', img: '/projects/Drieziek-Public-Transport-Facility.jpg' },
        { background: "#b35d7f", title: 'PROTEA GLEN', desc: 'Protea Glen Road and Stormwater Upgrades', client: 'Johannesburg Development Agency', img: '/projects/Protea-Glen.jpg' },
        { background: "#b35d7f", title: 'MGWALI SOUTH WATER SUPPLY SCHEME', desc: 'Water Reticulation and Associated Works for Mgwali', client: 'Amathole Discrict Municipality', img: '/projects/Mgwali-South-Water-Supply-Scheme.jpg' },
        { background: "#b35d7f", title: 'REA VAYA BRT', desc: 'Road construction for Rea Vaya from Clarendon to Arkwright.', client: 'Johannesburg Development Agency', img: '/projects/Rea-Vaya-BRT.jpg' },

      ],
    };
  },
};
</script>
