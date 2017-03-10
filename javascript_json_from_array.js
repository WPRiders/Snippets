// More details here: http://www.wpriders.com/snippets/javascript-json-form-array/

// Make JSON from JS Array
function arrayToJson (js_array_given) {
  json = Object.assign({}, js_array_given);
  return JSON.stringify(json);
};

// Usage
var random_array = [];
random_array['something'] = 'Some value';
random_array['something_else'] = 'derp';

console.log(arrayToJson(random_array)); // You should see a JSON output in your console.
