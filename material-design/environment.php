<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?= $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>Material design 是一个包含光线、材料和投射阴影的三维环境。</h1>
          <div class="gas-intro-h1-bottom"></div>
          <div class="col-list">
            <section class="module-module-figure col-3 h3-spacing">
              <div class="module">
                <p>所有的材料对象都包含 x、y、z 三个维度。</p>
                <p>所有的材料对象都有一个 Z 轴厚度。</p>
                <p>主光源投射出一个定向的阴影，而环境光从各个角度投射出连贯又柔和的阴影。</p>
              </div>
              <div class="module">
                <h3>材料的厚度</h3>
                <p>1dp</p>
                <h3>阴影</h3>
                <p>阴影是不同高度的材料相互叠加所产生的。</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?= static_url('../static/media/material-design/environment/what_is_material_environment.png'); ?>" loading="lazy"/>
                    </div>
                  </div>
                </figure>
              </div>
            </section>
          </div>
        </div>
      </div>

      <nav class="chapter-toc">
        <h1>目录</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="environment.html#environment-3d-world" data-qp-ui-data-id="qp:1">3D 世界</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="environment.html#environment-light-shadow" data-qp-ui-data-id="qp:2">光线和阴影</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="environment-3d-world" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            3D 世界
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module"><p>材料所处的环境是一个 3D 空间，这意味着每个对象都有 x、y、z 三维坐标属性，z 轴垂直于显示平面，并延伸向用户视角，每个材料都有 z 轴厚度，标准是 1dp，相当于一个屏幕密度为 160 的设备上的<a href="../layout/units-measurements.html#units-measurements-density-independent-pixels-dp-">一像素</a>。</p>
                    <p>在网页上，z 轴被用来分层而不是为了视角。3D 空间通过操纵 y 轴进行仿真。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 63.1578947368%">
                          <img alt="" aria-describedby="3d-world-figure-caption-0" src="<?= static_url('../static/media/material-design/environment/whatismaterial_environment_3d.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="3d-world-figure-caption-0">
                        <p>具有 x、y、z 轴的 3D 空间</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="environment-light-shadow" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            光线和阴影
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>在材料环境中，虚拟的光线照射使场景中的对象投射出阴影，直射光投射出一个定向的阴影，而环境光从各个角度投射出连贯又柔和的阴影。</p>
              <p>材料环境中的所有阴影都是由这两种光投射产生的，阴影是光线照射不到的地方，因为各个元素在 z 轴上占据了不同大小的位置，遮住了这些光线。在网页上，阴影的实现是在 y 轴上使用多重阴影。下面的案例中，卡片的高度是 6dp。</p>
              <div class="col-list">
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="light-shadow-figure-caption-0" src="<?= static_url('../static/media/material-design/environment/whatismaterial_environment_shadow1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="light-shadow-figure-caption-0">
                        <p>直射光投射的阴影</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="light-shadow-figure-caption-1" src="<?= static_url('../static/media/material-design/environment/whatismaterial_environment_shadow2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="light-shadow-figure-caption-1">
                        <p>环境光投射的阴影</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="light-shadow-figure-caption-2" src="<?= static_url('../static/media/material-design/environment/whatismaterial_environment_shadow3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="light-shadow-figure-caption-2">
                        <p>直射光和环境光混合投影</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>
        <div>
        </div>
      </div>
    </div>
  </section>
  <div class="gas-last-div-inner-bottom"></div>
</div>

<?php include SRC_PATH.'/public/footer.php'; ?>
