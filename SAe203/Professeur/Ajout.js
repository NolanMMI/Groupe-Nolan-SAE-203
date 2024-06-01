document.addEventListener('DOMContentLoaded', () => {
    const Ajout = document.getElementById('Ajout');
    const TableEtudiant = document.getElementById('TableEtudiant').getElementsByTagName('tbody')[0];
    const Etudiantnote = document.getElementById('Etudiantnote');
    const closeModal = document.getElementsByClassName('close')[0];
    const studentForm = document.getElementById('studentForm');


    loadStudents();

    Ajout.addEventListener('click', () => {
        openModal();
    });

    closeModal.addEventListener('click', () => {
        closeModalForm();
    });

    window.addEventListener('click', (event) => {
        if (event.target == Etudiantnote) {
            closeModalForm();
        }
    });

    studentForm.addEventListener('submit', (event) => {
        event.preventDefault();
        Ajoutcolonne();
        closeModalForm();
    });

    function openModal() {
        Etudiantnote.style.display = 'block';
    }

    function closeModalForm() {
        Etudiantnote.style.display = 'none';
        studentForm.reset();
    }

    function Ajoutcolonne() {
        const nom = document.getElementById('nom').value;
        const prenom = document.getElementById('prenom').value;
        const note = document.getElementById('note').value;
        const coef = document.getElementById('coef').value;

        const newRow = TableEtudiant.insertRow();
        newRow.innerHTML = `
            <td>${nom}</td>
            <td>${prenom}</td>
            <td>${note}</td>
            <td>${coef}</td>
        `;
        newRow.addEventListener('click', () => {
            newRow.classList.toggle('selected');
        });

        // Save to localStorage
        saveStudent({ nom, prenom, note, coef });
    }

    function saveStudent(student) {
        let students = JSON.parse(localStorage.getItem('students')) || [];
        students.push(student);
        localStorage.setItem('students', JSON.stringify(students));
    }

    function loadStudents() {
        const students = JSON.parse(localStorage.getItem('students')) || [];
        students.forEach(student => {
            const newRow = TableEtudiant.insertRow();
            newRow.innerHTML = `
                <td>${student.nom}</td>
                <td>${student.prenom}</td>
                <td>${student.note}</td>
                <td>${student.coef}</td>
            `;
            newRow.addEventListener('click', () => {
                newRow.classList.toggle('selected');
            });
        });
    }
});
