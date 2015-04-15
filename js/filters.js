//  Purpose: Sets image canvas filter.
//  Argument: string filter - css representation of filter
//  Preconditon: string filter - exists and defines the the fitler 
//  Postcondition: Image canvas has new filter.
function setFilter(filter)
{
    img.style.filter = filter;
    img.style.webkitFilter = filter;
}

//  Purpose: Applies null filter to image canvas.
//  Precondition: None.
//  Postcondition: Image canvas has null filter.
function applyOriginal()
{
    var filter = '';
    setFilter(filter);
}

//  Purpose: Applies nostalgia filter to image canvas.
//  Precondition: None.
//  Postcondition: Image canvas has nostalgia filter.
function applyNostalgia() 
{   
    var filter = 'saturate(40%) grayscale(100%) contrast(45%) sepia(100%)';
    setFilter(filter);
};

//  Purpose: Applies gray-scale filter to image canvas.
//  Precondition: None.
//  Postcondition: Image canvas has gray-scale filter.
function applyGrayscale() 
{   
    var filter = 'grayscale(100%)';
    setFilter(filter);
};

//  Purpose: Applies XPro2 filter to image canvas.
//  Precondition: None.
//  Postcondition: Image canvas has XPro2 filter.
function applyXPro2() 
{
    var filter = 'contrast(1.3) brightness(0.8) sepia(0.3) saturate(1.5) hue-rotate(-20deg)';
    setFilter(filter);
}

//  Purpose: Applies willow filter to image canvas.
//  Precondition: None.
//  Postcondition: Image canvas has willow filter.
function applyWillow()
{
    var filter = 'saturate(0.02) contrast(0.85) brightness(1.2) sepia(0.02)';
    setFilter(filter);
}

//  Purpose: Applies walden filter to image canvas.
//  Precondition: None.
//  Postcondition: Image canvas has walden filter.
function applyWalden()
{
    var filter = 'sepia(0.35) contrast(0.9) brightness(1.1) hue-rotate(-10deg) saturate(1.5)';
    setFilter(filter);
}

//  Purpose: Applies valencia filter to image canvas.
//  Precondition: None.
//  Postcondition: Image canvas has valencia filter.
function applyValencia()
{
    var filter = 'sepia(0.15) saturate(1.5) contrast(0.9)';
    setFilter(filter);
}

//  Purpose: Applies toaster filter to image canvas.
//  Precondition: None.
//  Postcondition: Image canvas has toaster filter.
function applyToaster()
{
    var filter = 'sepia(0.4) saturate(2.5) hue-rotate(-30deg) contrast(0.67)';
    setFilter(filter);
}

//  Purpose: Applies sutro filter to image canvas.
//  Precondition: None.
//  Postcondition: Image canvas has sutro filter.
function applySutro()
{
    var filter = 'brightness(0.75) contrast(1.3) sepia(0.5) hue-rotate(-25deg)';
    setFilter(filter);
}

//  Purpose: Applies sierra filter to image canvas.
//  Precondition: None.
//  Postcondition: Image canvas has sierra filter.
function applySierra()
{
    var filter = 'contrast(0.8) saturate(1.2) sepia(0.15)';
    setFilter(filter);
}

//  Purpose: Applies rise filter to image canvas.
//  Precondition: None.
//  Postcondition: Image canvas has rise filter.
function applyRise()
{
    var filter = 'saturate(1.4) sepia(0.25) hue-rotate(-15deg) contrast(0.8) brightness(1.1)';
    setFilter(filter);
}

//  Purpose: Applies nashville filter to image canvas.
//  Precondition: None.
//  Postcondition: Image canvas has nashville filter.
function applyNashVille()
{
    var filter = 'sepia(0.4) saturate(1.5) contrast(0.9) brightness(1.1) hue-rotate(-15deg)';
    setFilter(filter);
}

//  Purpose: Applies mayfair filter to image canvas.
//  Precondition: None.
//  Postcondition: Image canvas has mayfair filter.
function applyMayfair()
{
    var filter = 'saturate(1.4) contrast(1.1)';
    setFilter(filter);
}

//  Purpose: Applies lofi filter to image canvas.
//  Precondition: None.
//  Postcondition: Image canvas has lofi filter.
function applyLoFi() 
{   
    var filter = 'contrast(1.4) brightness(0.9) sepia(0.05)';
    setFilter(filter);
}

//  Purpose: Applies kelvin filter to image canvas.
//  Precondition: None.
//  Postcondition: Image canvas has kelvin filter.
function applyKelvin() 
{   
    var filter = 'sepia(0.4) saturate(2.4) brightness(1.3) contrast(1)';
    setFilter(filter);
}

//  Purpose: Applies inkwell filter to image canvas.
//  Precondition: None.
//  Postcondition: Image canvas has inkwell filter.
function applyInkwell() 
{   
    var filter = 'grayscale(1) brightness(1.2) contrast(1.05)';
    setFilter(filter);
}

//  Purpose: Applies hudson filter to image canvas.
//  Precondition: None.
//  Postcondition: Image canvas has hudson filter.
function applyHudson() 
{   
    var filter = 'contrast(1.3) sepia(0.3) saturate(1.3) hue-rotate(-10deg) brightness(0.95)';
    setFilter(filter);
}

//  Purpose: Applies earlybird filter to image canvas.
//  Precondition: None.
//  Postcondition: Image canvas has earlybird filter.
function applyEarlybird() 
{   
    var filter = 'sepia(0.4) saturate(1.6) contrast(1.1) brightness(0.9) hue-rotate(-10deg)';
    setFilter(filter);
}

//  Purpose: Applies hefe filter to image canvas.
//  Precondition: None.
//  Postcondition: Image canvas has hefe filter.
function applyHefe() 
{   
    var filter = 'contrast(1.2) brightness(0.9) hue-rotate(-10deg)';
    setFilter(filter);
}

//  Purpose: Applies brannan filter to image canvas.
//  Precondition: None.
//  Postcondition: Image canvas has brannan filter.
function applyBrannan() 
{   
    var filter = 'sepia(0.5) contrast(1.4)';
    setFilter(filter);
}

//  Purpose: Applies amaro filter to image canvas.
//  Precondition: None.
//  Postcondition: Image canvas has amaro filter.
function applyAmaro() 
{   
    var filter = 'hue-rotate(-10deg) contrast(0.9) brightness(1.1) saturate(1.5)';
    setFilter(filter);
}

//  Purpose: Applies 1977 filter to image canvas.
//  Precondition: None.
//  Postcondition: Image canvas has 1977 filter.
function apply1977() 
{   
    var filter = 'sepia(0.5) hue-rotate(-30deg) saturate(1.2) contrast(0.8)';
    setFilter(filter);
}