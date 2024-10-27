const mobile = {
  brand: "samsung",
  price: 25000,
  color: "black",
  camera: "12mp",
  Isnew: true,
};

// for of = Array
// for in = object

for (let property in mobile) {
  //   console.log(property);
  //   console.log(mobile[property], `${"\n"}`);
}

const keys = Object.keys(mobile);
console.log(keys);

for (const key of keys) {
  console.log(key);
  console.log(key, ":", mobile[key], `${"\n"}`);
}


creae