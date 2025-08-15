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

function formData() {
    return {
      step: 1,
      image: '',
      nama_driver: '',
      departemen:'',
      no_unit:'',
      shift:'',
      start_hm:'',
    //   finish_hm:'',
    //   hm_next_service:'',
      profession: '',
      nextStep() {
        const name = this.nama_driver;
        const departemen = this.departemen;
        const no_unit = this.no_unit;
        const shift = this.shift;
        const start_hm = this.start_hm;
        // const finish_hm = this.finish_hm;
        // const hm_next_service = this.hm_next_service;
        let isValid = true;

        // Reset previous tooltips
        document.querySelectorAll('.tooltip').forEach(t => t.classList.add('invisible'));

        //Validasi Nama Driver
        if (!name.trim()) {
          document.getElementById('tooltip-nama_driver').classList.remove('invisible');
          document.getElementById('nama_driver').scrollIntoView({ behavior: 'smooth' });
          isValid = false;
        }

        // const nama_driverSelect = document.getElementById('nama_driver');
        // if (nama_driverSelect.value === "") {
        //   document.getElementById('tooltip-nama_driver').classList.remove('invisible');
        //   //departemenSelect.scrollIntoView({ behavior: 'smooth' });
        //   document.getElementById('nama_driver').scrollIntoView({ behavior: 'smooth' });
        //   isValid = false;
        // }

        // // Validasi Nama Driver
        // if (!this.nama_driver.trim() && !document.getElementById('nama_driver').value.trim()) {
        //     document.getElementById('tooltip-nama_driver').classList.remove('invisible');
        //     document.getElementById('nama_driver').scrollIntoView({ behavior: 'smooth' });
        //     isValid = false;
        //   }

        const departemenSelect = document.getElementById('departemen');
        if (departemenSelect.value === "") {
          document.getElementById('tooltip-departemen').classList.remove('invisible');
          //departemenSelect.scrollIntoView({ behavior: 'smooth' });
          document.getElementById('departemen').scrollIntoView({ behavior: 'smooth' });
          isValid = false;
        }

        const no_unitSelect = document.getElementById('no_unit');
        if (no_unitSelect.value === "") {
          document.getElementById('tooltip-no_unit').classList.remove('invisible');
          //departemenSelect.scrollIntoView({ behavior: 'smooth' });
          document.getElementById('no_unit').scrollIntoView({ behavior: 'smooth' });
          isValid = false;
        }

        const shiftSelect = document.getElementById('shift');
        if (shiftSelect.value === "") {
          document.getElementById('tooltip-shift').classList.remove('invisible');
          //departemenSelect.scrollIntoView({ behavior: 'smooth' });
          document.getElementById('shift').scrollIntoView({ behavior: 'smooth' });
          isValid = false;
        }

        if (!start_hm.trim()) {
          document.getElementById('tooltip-start_hm').classList.remove('invisible');
          document.getElementById('start_hm').scrollIntoView({ behavior: 'smooth' });
          isValid = false;
        }

        // if (!finish_hm.trim()) {
        //   document.getElementById('tooltip-finish_hm').classList.remove('invisible');
        //   document.getElementById('finish_hm').scrollIntoView({ behavior: 'smooth' });
        //   isValid = false;
        // }

        // if (!hm_next_service.trim()) {
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
        // Kembali ke langkah sebelumnya
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
          // Jika nilai kosong, tampilkan tooltip
          if (element.value === "") {
              tooltip.classList.remove('invisible'); // Tampilkan tooltip
          } else {
              tooltip.classList.add('invisible'); // Sembunyikan tooltip
          }
          }
      }
      }

    };
  }
