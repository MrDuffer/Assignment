const college = {
  name: "vnc",
  class: ["11", "12"],
  events: ["science fair", "bijoy dbos", "21 frb"],
  unique: {
    color: "blue",
    result: {
      gpa: 5,
      merit: "top",
    },
  },
};

console.log(college.unique.result.merit);
console.log(college["unique"].result.gpa);
console.log(college.events[1]);

console.log(college);
delete college.class;
console.log(college);
