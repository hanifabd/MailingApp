function partials_include(elementId, content) {
    $("#"+elementId).load("partials/"+content);
}