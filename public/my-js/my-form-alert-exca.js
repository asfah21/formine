function dropdown_name() {
    return {
        isOpen: false,
        search: '',
        pilihValue: '',   // Pilih nama driver yang dipilih
        pilihText: '',
        drivers: [],

        init() {
            fetch('/IniAdalahListNamaKaryawanPTGSIPer16Januari2025')
                .then(response => response.json())
                .then(data => {
                    this.drivers = data.map(driver => driver.name);
                })
                .catch(error => console.error('Error fetching drivers:', error));
        },

        toggle() {
            this.isOpen = !this.isOpen;
        },
        close() {
            this.isOpen = false;
        },
        select(driver) {
            this.pilihValue = driver;     // Set nilai yang dipilih
            this.pilihText = driver;
            this.isOpen = false;
            document.getElementById('tooltip-nama_driver').classList.add('invisible'); // Hide tooltip
        },
        get filteredDrivers() {
            return this.drivers.filter(driver =>
                driver.toLowerCase().includes(this.search.toLowerCase())
            );
        },

        // Fungsi untuk mengupdate nama_driver di formData
        updateFormDataNamaDriver(driver) {
            const formDataComponent = document.querySelector('[x-data="formData()"]');
            if (formDataComponent) {
                formDataComponent.__x.$data.nama_driver = driver; // Update nama_driver di formData
            }
        }
    };
}

  function dropdown() {
    return {
      isOpen: false,
      search: '',
      selectedValue: '',
      selectedText: '',
      units: Array.from({ length: 120 }, (_, i) => `EX.${String(i + 201).padStart(3, '0')}`)
      .concat(['EX.501']),

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

        no_unit: '',

        // Fungsi untuk menangani validasi dan submit form
        submitForm(event) {
            let isValid = true;

            // Reset previous tooltips
            document.querySelectorAll('.tooltip').forEach((t) => t.classList.add('invisible'));

            // Validasi No Unit
            if (!this.no_unit.trim() && !document.getElementById('no_unit').value.trim()) {
                document.getElementById('tooltip-no_unit').classList.remove('invisible');
                document.getElementById('no_unit').scrollIntoView({ behavior: 'smooth' });
                isValid = false;
            }

        },

        hideTooltip(no_unit) {
            const element = document.getElementById(no_unit);

            // Pastikan elemen ada
            if (element) {
                const tooltip = document.getElementById(`tooltip-${no_unit}`);

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

