<script>
  import ImgMoon from "./ImgMoon.svelte";
  import ImgSun from "./ImgSun.svelte";

  let darkMode = false;

  function toggleTheme() {
    darkMode = !darkMode;

    if (darkMode) {
      document.getElementById("screen").setAttribute("data-theme", "dark");
    } else {
      document.getElementById("screen").removeAttribute("data-theme");
    }
  }
</script>

<button on:click={toggleTheme}
  ><div class="thumb" class:dark={darkMode} />
  <ImgMoon /><ImgSun /></button
>

<style>
  :root {
    --color-shadow: #ffa7c4;
  }

  button {
    position: relative;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border: none;
    border-radius: 3rem;
    height: 2.4rem;
    width: 5rem;
    background-color: #0f1114;
    cursor: pointer;
  }

  button:focus .thumb {
    box-shadow: 0 0 2px 3px var(--color-shadow);
  }

  button:active .thumb {
    box-shadow: 0 0 5px 5px var(--color-shadow);
  }

  .thumb {
    position: absolute;
    left: 1px;
    height: 2.2rem;
    width: 2.2rem;
    border-radius: 50%;
    background-color: #fafafa;
    transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1) 0ms;
  }

  .thumb.dark {
    transform: translateX(26px);
  }
</style>
