const portfolioScroll = () => {

  const project = document.querySelectorAll('.project');
  let currentProjectIndex = 0;
  const nextButton = document.querySelector('#next');
  const prevButton = document.querySelector('#prev');

  project[currentProjectIndex].classList.add('active');

  const nextProject = () => {
    project[currentProjectIndex].classList.remove('active');
    currentProjectIndex = (currentProjectIndex + 1) % project.length;
    project[currentProjectIndex].classList.add('active');
  };

  const prevProject = () => {
    project[currentProjectIndex].classList.remove('active');
    if (currentProjectIndex === 0) {
      currentProjectIndex = project.length - 1;
    } else {
      currentProjectIndex--;
    }
    project[currentProjectIndex].classList.add('active');
  };

  nextButton.addEventListener('click', nextProject);
  prevButton.addEventListener('click', prevProject);

}

portfolioScroll();
