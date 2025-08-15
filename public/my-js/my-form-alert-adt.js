// function dropdown_name() {
//     return {
//         isOpen: false,
//         search: '',
//         pilihValue: '',   // Pilih nama driver yang dipilih
//         pilihText: '',
//         drivers: [],

//         init() {
//             fetch('/IniAdalahListNamaKaryawanPTGSIPer16Januari2025')
//                 .then(response => response.json())
//                 .then(data => {
//                     this.drivers = data.map(driver => driver.name);
//                 })
//                 .catch(error => console.error('Error fetching drivers:', error));
//         },

//         toggle() {
//             this.isOpen = !this.isOpen;
//         },
//         close() {
//             this.isOpen = false;
//         },
//         select(driver) {
//             this.pilihValue = driver;     // Set nilai yang dipilih
//             this.pilihText = driver;
//             this.isOpen = false;
//             document.getElementById('tooltip-nama_driver').classList.add('invisible'); // Hide tooltip
//         },
//         get filteredDrivers() {
//             return this.drivers.filter(driver =>
//                 driver.toLowerCase().includes(this.search.toLowerCase())
//             );
//         },

//         // Fungsi untuk mengupdate nama_driver di formData
//         updateFormDataNamaDriver(driver) {
//             const formDataComponent = document.querySelector('[x-data="formData()"]');
//             if (formDataComponent) {
//                 formDataComponent.__x.$data.nama_driver = driver; // Update nama_driver di formData
//             }
//         }
//     };
// }

function dropdown() {
    return {
      isOpen: false,
      search: '',
      selectedValue: '',
      selectedText: '',

    // units: Array.from({ length: 10 }, (_, i) => `BD.${String(i + 101).padStart(3, '0')}`)
    // .filter(unit => !['BD.102', 'BD.109', 'BD.110', 'BD.108'].includes(unit))
    // .concat(['BD.605']),


      units: Array.from({ length: 6 }, (_, i) => `ADT.${String(i + 1).padStart(3, '0')}`)
      .filter(unit => !['ADT.005', 'ADT.006'].includes(unit)),

      toggle() {
        this.isOpen = !this.isOpen;
      },
      close() {
        this.isOpen = false;
      },
      select(unit) {
        this.selectedValue = unit;
        this.selectedText = unit;
        this.isOpen = false;
        document.getElementById('tooltip-no_unit').classList.add('invisible'); // Hide tooltip
      },
      get filteredUnits() {
        return this.units.filter((unit) =>
          unit.toLowerCase().includes(this.search.toLowerCase())
        );
      },
    };
  }

  function formData() {
    return {
      step: 1,
      nama_driver: '',
      departemen: '',
      no_unit: '',
      shift: '',
      start_hm: '',
    //   finish_hm: '',
    //   hm_next_service: '',
      profession: '',
      nextStep() {
        let isValid = true;

        // Reset previous tooltips
        document.querySelectorAll('.tooltip').forEach((t) => t.classList.add('invisible'));

        //Validasi Nama Driver
        if (!this.nama_driver.trim()) {
          document.getElementById('tooltip-nama_driver').classList.remove('invisible');
          document.getElementById('nama_driver').scrollIntoView({ behavior: 'smooth' });
          isValid = false;
        }

        // Validasi Nama Driver
        // if (!this.nama_driver.trim() && !document.getElementById('nama_driver').value.trim()) {
        //     document.getElementById('tooltip-nama_driver').classList.remove('invisible');
        //     document.getElementById('nama_driver').scrollIntoView({ behavior: 'smooth' });
        //     isValid = false;
        //   }

        // Validasi Departemen
        if (!this.departemen.trim()) {
          document.getElementById('tooltip-departemen').classList.remove('invisible');
          document.getElementById('departemen').scrollIntoView({ behavior: 'smooth' });
          isValid = false;
        }

        // Validasi No Unit
        if (!this.no_unit.trim() && !document.getElementById('no_unit').value.trim()) {
          document.getElementById('tooltip-no_unit').classList.remove('invisible');
          document.getElementById('no_unit').scrollIntoView({ behavior: 'smooth' });
          isValid = false;
        }

        // Validasi Shift
        if (!this.shift.trim()) {
          document.getElementById('tooltip-shift').classList.remove('invisible');
          document.getElementById('shift').scrollIntoView({ behavior: 'smooth' });
          isValid = false;
        }

        // Validasi Start HM
        if (!this.start_hm.trim()) {
          document.getElementById('tooltip-start_hm').classList.remove('invisible');
          document.getElementById('start_hm').scrollIntoView({ behavior: 'smooth' });
          isValid = false;
        }

        // // Validasi Finish HM
        // if (!this.finish_hm.trim()) {
        //   document.getElementById('tooltip-finish_hm').classList.remove('invisible');
        //   document.getElementById('finish_hm').scrollIntoView({ behavior: 'smooth' });
        //   isValid = false;
        // }

        // // Validasi HM Next Service
        // if (!this.hm_next_service.trim()) {
        //   document.getElementById('tooltip-hm_next_service').classList.remove('invisible');
        //   document.getElementById('hm_next_service').scrollIntoView({ behavior: 'smooth' });
        //   isValid = false;
        // }

        // Jika valid, lanjutkan ke langkah berikutnya
        if (isValid) {
          this.step++;
        }
      },
      prevStep() {
        if (this.step > 1) {
          this.step--;
        }
      },
      hideTooltip(inputId) {
        const element = document.getElementById(inputId);

        // Pastikan elemen ada
        if (element) {
          const tooltip = document.getElementById(`tooltip-${inputId}`);

          // Pastikan tooltip terkait ada
          if (tooltip) {
            // Jika nilai valid, sembunyikan tooltip
            if (element.value.trim()) {
              tooltip.classList.add('invisible');
            }
          }
        }
      },
    };
  }
