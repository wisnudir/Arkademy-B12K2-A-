function biodataToJSON(nameData,ageData,addressData,hobbiesData,is_marriedData,list_schoolData,skillsData,interest_in_codingData) {
    var data = {
        name: nameData,
        age: ageData,
        address: addressData,
        hobbies: hobbiesData,
        is_married: is_marriedData,
        list_school: list_schoolData,
        skills: skillsData,
        interest_in_coding: interest_in_codingData
    }
    
    var dataJSON = JSON.stringify(data);
    return(console.log(dataJSON));
}

var name = 'Andika Satya Wisnu';
var age = 25;
var address = 'Kepitu RT005/RW018, Trimulyo, Sleman, Sleman, Yogyakarta 55513';
var hobbies = ['Graphic Designing', 'Programming', 'Playing Music Instrument', 'Watching some Movies'];
var is_married = false;
var list_school = [
    {
        name: 'SD N Kadisobo II',
        year_in: 2000,
        year_out: 2006,
        major: null
    },
    {
        name: 'SMP N 1 Sleman',
        year_in: 2006,
        year_out: 2009,
        major: null
    },
    {
        name: 'SMA N 4 Yogyakarta',
        year_in: 2009,
        year_out: 2012,
        major: 'IPA'
    },
    {
        name: 'Universitas Negeri Yogyakarta',
        year_in: 2012,
        year_out: 2019,
        major: 'Matematika'
    }
];
var skills = [
    {name: 'PHP',level: 'advanced'},
    {name: 'HTML',level: 'advanced'},
    {name: 'CSS',level: 'advanced'},
    {name: 'Javascript', level: 'beginner'},
    {name: 'Codeigniter',level: 'beginner'},
    {name: 'SQL',level: 'advanced'},
    {name: 'Java',level: 'beginner'},
    {name: 'Godot',level: 'beginner'},
    {name: 'Ms Exel',level: 'advanced'},
    {name: 'CorelDraw',level: 'expert'},
    {name: 'Adobe Illustrator',level: 'advanced'},
    {name: 'Adobe Photoshop',level: 'beginner'},
    {name: 'Adobe InDesign',level: 'beginner'},
    {name: 'Adobe XD',level: 'beginner'},
    {name: 'Adobe Premiere',level: 'beginner'},
    {name: 'Adobe After Effect',level: 'beginner'},
    {name: 'SPSS',level: 'beginner'},
    {name: 'Matlab',level: 'beginner'},
    {name: 'Matematika',level: 'advanced'},
    {name: 'Statistika',level: 'beginner'},
    {name: 'Percetakan',level: 'advanced'},
    {name: 'English',level: 'advanced'}        
];
var interest_in_coding = true;

biodataToJSON(name,age,address,hobbies,is_married,list_school,skills,interest_in_coding);