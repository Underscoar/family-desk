const { createApp, ref } = Vue

createApp({
  setup() {
    const step = ref(1)
    const gender = ref()
    const spouse = ref()
    const boys = ref(0)
    const girls = ref(0)
    const loading = ref(false)

    function goToFamilyDesk() {
      loading.value = true
      const kidsArray = []

      for (let i=0; i<boys.value; i++) {
        kidsArray.push('boy')
      }
      for (let i=0; i<girls.value; i++) {
        kidsArray.push('girl')
      }

      const shuffledArray = shuffle(kidsArray)

      let form = document.createElement("form");
      form.className = 'hidden-form'
      
      form.method = "GET";
      form.action = "/familydesk.php";   
      
      let genderVal = document.createElement("input"); 
      genderVal.value=gender.value;
      genderVal.name="gender";
      form.appendChild(genderVal);  
      
      if (spouse.value && spouse.value !== 'none') {
        let spouseVal = document.createElement("input");  
        spouseVal.value=spouse.value;
        spouseVal.name="spouse";
        form.appendChild(spouseVal);
      }

      if (shuffledArray.length > 0) {
        let kidsVal = document.createElement("input");  
        kidsVal.value=shuffledArray;
        kidsVal.name="kids";
        form.appendChild(kidsVal);
      }

      document.body.appendChild(form);

      form.submit();
    }

    const shuffle = (array) => { 
      for (let i = array.length - 1; i > 0; i--) { 
        const j = Math.floor(Math.random() * (i + 1)); 
        [array[i], array[j]] = [array[j], array[i]]; 
      } 
      return array; 
    };    

    return {
      step,
      gender,
      spouse,
      boys,
      girls,
      loading,
      goToFamilyDesk,
    }
  }
}).mount('#app')