function showMenu() {
    document.getElementById("navLinks").style.right = "0";
}

function hideMenu() {
    document.getElementById("navLinks").style.right = "-200px";
}

function openEmail() {
        window.location.href = 'mailto:thelangusage@gmail.com';
    }
document.addEventListener("DOMContentLoaded", function() {
    // Hide all resources sections initially
    var resourceSections = document.querySelectorAll(".Resources section:not(.footer)");
    resourceSections.forEach(function(section) {
        section.style.display = "none";
    });

    // Add click event listeners to language links
    var languageLinks = document.querySelectorAll(".language-list ul li a");
    languageLinks.forEach(function(link) {
        link.addEventListener("click", function(event) {
            event.preventDefault();

            // Hide "Choose your target language" header
            var chooseLanguageHeader = document.getElementById("chooseLanguageHeader");
            chooseLanguageHeader.style.display = "none";

            // Hide all language options
            var allLanguageOptions = document.querySelectorAll(".language-box");
            allLanguageOptions.forEach(function(languageOption) {
                languageOption.style.display = "none";
            });

            // Hide all resources sections
            resourceSections.forEach(function(section) {
                section.style.display = "none";
            });

            // Show the selected language's resources
            var languageResourcesId = this.getAttribute("href").substr(1);
            var languageResourcesSection = document.getElementById(languageResourcesId);
            if (languageResourcesSection) {
                languageResourcesSection.style.display = "block";
            }
        });
    });

    // Add click event listeners to level links
    var levelLinks = document.querySelectorAll(".level .resource-col h3 a");
    levelLinks.forEach(function(link) {
        link.addEventListener("click", function(event) {
            event.preventDefault();

            // Hide all resources sections
            resourceSections.forEach(function(section) {
                section.style.display = "none";
            });

            // Show the corresponding resources section
            var targetId = this.getAttribute("href").substr(1);
            var targetSection = document.getElementById(targetId);
            if (targetSection) {
                targetSection.style.display = "block";
            }
        });
    });

    
    


});



