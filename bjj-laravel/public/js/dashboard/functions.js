activeBlock = (blocksLine, nameOfClass) => {
    for (let i = 0; i < blocksLine.length; i++) {
        blocksLine[i].addEventListener("click", function () {
            for (let j = 0; j < blocksLine.length; j++) {
                blocksLine[j].classList.remove(nameOfClass);
            }

            if (!blocksLine[i].classList.contains(nameOfClass)) {
                blocksLine[i].classList.add(nameOfClass);
            }
        });
    }
};
