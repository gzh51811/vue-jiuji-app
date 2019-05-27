<template>
  <div class="container">
    <mytop></mytop>

    <div class="gcenter">
      <!-- 轮播图 -->
      <div data-v-19b06535 class="product-swipe relative" style="height: 349px;margin-top:50px;">
        <mt-swipe :show-indicators="false" :auto="0" @change="handleChange">
          <mt-swipe-item v-for="(item,idx) in datalist.pictures" :key="idx" :name="idx">
            <video
              volume="0.5"
              v-show="(idx==0)"
              src="https://img2.ch999img.com/pic/product/opic/20181228143538520.mp4"
              :poster="datalist.pictures[0]"
              class="video"
              style="width: 100%;"
            ></video>
            <div data-v-eefe41ba class="gesture-mask" v-show="(idx==0)">
              <svg
                data-v-eefe41ba
                viewBox="0 0 1024 1024"
                width="50"
                height="50"
                class="play-btn"
                style="fill: rgb(255, 255, 255);"
              >
                <path
                  data-v-eefe41ba
                  d="M512.718 1.549C230.377 1.549 1.494 230.432 1.494 512.774S230.377 1024 512.718 1024s511.224-228.884 511.224-511.226S795.06 1.55 512.718 1.55z m0 971.325c-254.108 0-460.102-205.996-460.102-460.102S258.61 52.67 512.718 52.67 972.82 258.665 972.82 512.772 766.826 972.874 512.718 972.874z m232.06-496.332c-79.556-54.133-223.815-135.157-305.959-185.36-33.678-21.239-61.996-12.71-64.717 24.8-1.971 100.468 0 294.317 0 396.523 1.711 38.08 35.282 43.101 64.419 27.812 82.05-49.71 223.071-135.147 305.536-185.11-0.54-0.327 62.614-35.06 0.72-78.665z"
                  p-id="5260"
                ></path>
              </svg>
            </div>
            <img :src="datalist.pictures[idx]" class="lazy-img">
          </mt-swipe-item>
        </mt-swipe>
      </div>

      <!-- 轮播图选择 -->
      <div
        data-v-19b06535
        class="flex padding-left padding-right white-bg flex-justify-between"
        style="padding-top: 2px;"
      >
        <div data-v-19b06535 style="width: 54px;"></div>
        <div data-v-19b06535 class="flex flex-center">
          <div
            data-v-19b06535
            v-for="(item,idx) in banselect"
            :key="idx"
            @click="switchCar(idx)"
            class="swipe-btn relative"
          >
            <img
              data-v-19b06535
              :src="se_imgurl[1]"
              :class="{btnUnselected:!(currentred == idx)}"
              class="play-btn-bg absolute"
            >
            <span
              data-v-19b06535
              class="play-btn-text relative font-10"
              :class="{active:currentred == idx}"
            >{{item}}</span>
          </div>
        </div>

        <div data-v-19b06535 class="product-swipe-page">
          <span
            data-v-19b06535
            class="page-box"
          >{{carIndex+1}}/{{datalist.pictures&&datalist.pictures.length}}</span>
        </div>
      </div>

      <!-- 图片 -->
      <div class="banner-box">
        <a href="javascript:;">
          <img
            src="https://img2.ch999img.com//pic/edt/ad/20190308/20190308221632_4013.png"
            class="banner-img"
            style="width: 100%;"
          >
        </a>
      </div>

      <!-- 价格 -->
      <div data-v-61e9373c class="product-wrapper basic-info">
        <p data-v-61e9373c class="product-title">
          <span data-v-61e9373c>
            <strong
              data-v-61e9373c
            >Apple {{datalist.productName}} {{datalist.skuName}} 双卡双待六种配色6.1英寸LCD屏幕</strong>
          </span>
        </p>
        <p data-v-61e9373c class="product-profile red">
          <span data-v-61e9373c>【九机周年庆3.8-3.17】官网最高直降1300！</span>
        </p>
        <div data-v-61e9373c class="product-price-box red">
          <span data-v-61e9373c class="mark">¥</span>
          <span data-v-61e9373c>{{datalist.price}}</span>
        </div>
        <div data-v-61e9373c class="mt-5 option-row flex flex-content-between">
          <a data-v-61e9373c href="/product/price-trend/68436" class="btn-o">价格走势</a>
          <a data-v-61e9373c href="javascript:" class="btn-o">降价通知</a>
          <a data-v-61e9373c href="javascript:;" class="btn-o">机型对比</a>
          <a data-v-61e9373c href="javascript:" class="btn-o">开箱展示</a>
        </div>
      </div>

      <!-- 规格 -->
      <div class="spec-params-wrapper white-bg margin-top">
        <div class="module-box spec-params">
          <div class="module-header flex flex-justify-between flex-align-center">
            <div class="module-title flex flex-align-center small" style="width:65px;color:#999;">
              <span style="padding-right:14px">规</span>
              <span style="padding:14px">格</span>
            </div>
            <div class="module-content flex flex-align-center">
              <div>
                <div class="spec-params-container" style="width: 1118px;">
                  <div class="spec-params-item flex flex-col flex-center">
                    <img src="https://img2.ch999img.com/pic/product/70x70/20180803153357141.png">
                    <p class="key text">屏幕尺寸</p>
                    <p class="val text">6.1 英寸</p>
                  </div>
                  <div class="spec-params-item flex flex-col flex-center">
                    <img src="https://img2.ch999img.com/pic/product/70x70/20180803153248164.png">
                    <p class="key text">主屏分辨率</p>
                    <p class="val text">1792 x 828 像素分辨率</p>
                  </div>
                  <div class="spec-params-item flex flex-col flex-center">
                    <img src="https://img2.ch999img.com/pic/product/70x70/20180803153435742.png">
                    <p class="key text">机身内存</p>
                    <p class="val text">64GB</p>
                  </div>
                  <div class="spec-params-item flex flex-col flex-center">
                    <img src="https://img2.ch999img.com/pic/product/70x70/20180803153447276.png">
                    <p class="key text">运行内存</p>
                    <p class="val text">3GB</p>
                  </div>
                  <div class="spec-params-item flex flex-col flex-center">
                    <img src="https://img2.ch999img.com/pic/product/70x70/20180803153142471.png">
                    <p class="key text">CPU型号</p>
                    <p class="val text">A12 仿生</p>
                  </div>
                  <div class="spec-params-item flex flex-col flex-center">
                    <img src="https://img2.ch999img.com/pic/product/70x70/20180803153323547.png">
                    <p class="key text">核心数</p>
                    <p class="val text">六核</p>
                  </div>
                  <div class="spec-params-item flex flex-col flex-center">
                    <img src="https://img2.ch999img.com/pic/product/70x70/20180803153203987.png">
                    <p class="key text">SIM卡规格</p>
                    <p class="val text">两个Nano SIM卡</p>
                  </div>
                  <div class="spec-params-item flex flex-col flex-center">
                    <img src="https://img2.ch999img.com/pic/product/70x70/20180803153342880.png">
                    <p class="key text">后置摄像头像素</p>
                    <p class="val text">1200万像素</p>
                  </div>
                  <div class="spec-params-item flex flex-col flex-center">
                    <img src="https://img2.ch999img.com/pic/product/70x70/20180803153610643.png">
                    <p class="key text">指纹识别</p>
                    <p class="val text">不支持</p>
                  </div>
                  <div class="spec-params-item flex flex-col flex-center">
                    <img src="https://img2.ch999img.com/pic/product/70x70/20180803153513113.png">
                    <p class="key text">快速充电</p>
                    <p class="val text">支持（需使用快速充电器）</p>
                  </div>
                  <div class="spec-params-item flex flex-col flex-center">
                    <img src="https://img2.ch999img.com/pic/product/70x70/20180803153542542.png">
                    <p class="key text">数据接口</p>
                    <p class="val text">Lightning</p>
                  </div>
                  <div class="spec-params-item flex flex-col flex-center">
                    <img src="https://img2.ch999img.com/pic/product/70x70/20180803153730820.png">
                    <p class="key text">标配电池</p>
                    <p class="val text">2942mAh</p>
                  </div>
                  <div class="spec-params-item flex flex-col flex-center">
                    <img src="https://img2.ch999img.com/pic/product/70x70/2018080315372063.png">
                    <p class="key text">电池设计</p>
                    <p class="val text">内置电池</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="module-box-wrapper no-padding margin-top white-bg">
        <div>
          <div class="service-box" style="height: 55px;padding-top: 15px;">
            <div class="flex service-box-inner">
              <a
                href="javascript:;"
                class="flex-child-average flex flex-center"
                style="border-right:1px solid #ccc;"
              >
                <div>
                  <p class="service-item-title grey-9">一手优品</p>
                  <p class="service-item-description flex flex-align-end" style="margin-top: 8px;">
                    <span class="font-12">￥</span>
                    <span class="font-16">5199</span>
                    <span class="font-12">.00</span>
                  </p>
                </div>
              </a>
              <a
                href="javascript:;"
                class="flex-child-average flex flex-center"
                style="border-right:1px solid #ccc;"
              >
                <div>
                  <p class="service-item-title grey-9">二手良品</p>
                  <p class="service-item-description flex flex-align-end" style="margin-top: 8px;">
                    <span class="font-12">￥</span>
                    <span class="font-16">4499</span>
                    <span class="font-12">.00</span>
                  </p>
                </div>
              </a>
              <a href="javascript:;" class="flex-child-average flex flex-center">
                <div>
                  <p class="service-item-title grey-9">租机体验</p>
                  <p class="service-item-description flex flex-align-end" style="margin-top: 8px;">
                    <span class="font-12">￥</span>
                    <span class="font-16">11</span>
                    <span class="font-12">.19</span>
                    <span class="font-12">/日 起</span>
                  </p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div data-v-5b31426a class="margin-top">
        <div data-v-5b31426a class="module-box-wrapper white-bg promotions">
          <div data-v-c1173c4a data-v-5b31426a class="module-box">
            <div data-v-c1173c4a class="module-header flex flex-justify-between flex-align-center">
              <div data-v-c1173c4a class="module-title flex flex-align-center small">
                <span data-v-c1173c4a>促</span>
                <span data-v-c1173c4a>销</span>
                <span data-v-c1173c4a>活</span>
                <span data-v-c1173c4a>动</span>
              </div>
              <div data-v-c1173c4a class="module-content flex flex-align-center"></div>
              <div data-v-c1173c4a class="module-operation">
                <a data-v-c1173c4a href="javascript:" class="grey-9 flex flex-center font-12">
                  <i data-v-c1173c4a class="more ml-5"></i>
                </a>
                <i data-v-c1173c4a class="more ml-5"></i>
              </div>
            </div>
            <div data-v-5b31426a data-v-c1173c4a>
              <div data-v-5b31426a data-v-c1173c4a class="margin-top lines-1">
                <span data-v-5b31426a data-v-c1173c4a class="text-mark">建行满减</span>
                <span data-v-5b31426a data-v-c1173c4a>线上下单选择到店取货，再减300元</span>
              </div>
              <div data-v-5b31426a data-v-c1173c4a class="margin-top lines-1">
                <span data-v-5b31426a data-v-c1173c4a class="text-mark">库分期</span>
                <span data-v-5b31426a data-v-c1173c4a>免息分期享不停</span>
              </div>
              <div data-v-5b31426a data-v-c1173c4a class="margin-top">
                <span data-v-5b31426a data-v-c1173c4a class="text-mark mark-inline">暖心回馈</span>
                <span data-v-5b31426a data-v-c1173c4a class="text-mark mark-inline">特价</span>
                <span data-v-5b31426a data-v-c1173c4a class="text-mark mark-inline">优惠套餐</span>
              </div>
            </div>
          </div>
        </div>
        <div
          data-v-5b31426a
          class="module-box-wrapper"
          style="background-color: rgb(250, 242, 217);"
        >
          <div data-v-c1173c4a data-v-5b31426a class="module-box force-red-font">
            <div data-v-c1173c4a class="module-header flex flex-justify-between flex-align-center">
              <div data-v-c1173c4a class="module-title flex flex-align-center small">
                <span data-v-c1173c4a>以</span>
                <span data-v-c1173c4a>旧</span>
                <span data-v-c1173c4a>换</span>
                <span data-v-c1173c4a>新</span>
              </div>
              <div data-v-c1173c4a class="module-content flex flex-align-center">
                <span data-v-5b31426a data-v-c1173c4a>急速到账购新机</span>
              </div>
              <div data-v-c1173c4a class="module-operation">
                <a
                  data-v-c1173c4a
                  href="https://m.9ji.com//api/common.aspx?act=addCart&amp;jump=2&amp;ppid=68436"
                  class="grey-9 flex flex-center font-12"
                >
                  <i data-v-c1173c4a class="fa fa-angle-right grey-9 ml-5 font-18"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div data-v-5b31426a class="module-box-wrapper white-bg">
          <div data-v-c1173c4a data-v-5b31426a class="module-box">
            <div data-v-c1173c4a class="module-header flex flex-justify-between flex-align-center">
              <div data-v-c1173c4a class="module-title flex flex-align-center small">
                <span data-v-c1173c4a>销</span>
                <span data-v-c1173c4a>量</span>
                <span data-v-c1173c4a>排</span>
                <span data-v-c1173c4a>行</span>
              </div>
              <div data-v-c1173c4a class="module-content flex flex-align-center">
                <span data-v-5b31426a data-v-c1173c4a>手机单品当日销量第1名</span>
              </div>
              <div data-v-c1173c4a class="module-operation">
                <a
                  data-v-c1173c4a
                  href="https://m.9ji.com/product/hot/rank?cid=2"
                  class="grey-9 flex flex-center font-12"
                >
                  <i data-v-c1173c4a class="fa fa-angle-right grey-9 ml-5 font-18"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 型号 -->
      <div class="module-box-wrapper white-bg margin-top">
        <div data-v-c1173c4a class="module-box">
          <div data-v-c1173c4a class="module-header flex flex-justify-between flex-align-center">
            <div data-v-c1173c4a class="module-title flex flex-align-center small">
              <span data-v-c1173c4a>已</span>
              <span data-v-c1173c4a>选</span>
            </div>
            <div data-v-c1173c4a class="module-content flex flex-align-center">
              <span data-v-c1173c4a class="bold">{{color}} {{g_qty}}件</span>
            </div>
            <div data-v-c1173c4a class="module-operation">
              <a
                data-v-c1173c4a
                href="javascript:"
                @click="show"
                class="grey-9 flex flex-center font-12"
              >
                <i data-v-c1173c4a class="more ml-5"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- 地址 -->
      <div data-v-08adb780 class="module-box-wrapper margin-top white-bg">
        <div data-v-c1173c4a data-v-08adb780 class="module-box">
          <div data-v-c1173c4a class="module-header flex flex-justify-between flex-align-center">
            <div data-v-c1173c4a class="module-title flex flex-align-center small">
              <span data-v-c1173c4a>送</span>
              <span data-v-c1173c4a>至</span>
            </div>
            <div data-v-c1173c4a class="module-content flex flex-align-center">
              <div data-v-08adb780 data-v-c1173c4a class="lines-1">
                <span data-v-08adb780 data-v-c1173c4a>广东省广州市花都区</span>
              </div>
            </div>
            <div data-v-c1173c4a class="module-operation">
              <a
                data-v-c1173c4a
                href="javascript:"
                class="grey-9 flex flex-center font-12"
                @click="showcity=!showcity"
              >
                <i data-v-c1173c4a class="more ml-5"></i>
              </a>
            </div>
          </div>
          <div data-v-c1173c4a class="module-prompt">
            <div data-v-08adb780 data-v-c1173c4a>
              <div data-v-08adb780 data-v-c1173c4a class="font-12 margin-top lines-1">
                <span
                  data-v-08adb780
                  data-v-c1173c4a
                  class="mr-5"
                  style="color: rgb(242, 28, 28);"
                >充足</span>
                <span
                  data-v-08adb780
                  data-v-c1173c4a
                  class="stock-position"
                >现在下单，预计 03月24日(周日)11:31 前送达</span>
              </div>
              <div
                data-v-08adb780
                data-v-c1173c4a
                class="margin-top express-info flex flex-align-center"
              >
                <a
                  data-v-08adb780
                  data-v-c1173c4a
                  href="https://m.9ji.com/news/599.html"
                  class="flex flex-align-center"
                >
                  <span
                    data-v-08adb780
                    data-v-c1173c4a
                    class="font-12"
                    style="color: rgb(241, 105, 11);"
                  >快递运输（免费邮寄）</span>
                  <img
                    data-v-08adb780
                    data-v-c1173c4a
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAAAXNSR0IArs4c6QAACchJREFUaAXtW32MXFUVf/fNLh1230wlSrfVnY9umkrTFRNpYIN/aSBQWpAUKP6hBtui8qEJ0RhUqFCqIAQJCYiYWE3qHwolEFjSChpiILDWokG3VMpSdmfHbI1E6c60TDvz3vV3Xt+b3q83783sjlLdl8y+c88959zzu1/v3nPvWtbCs1ADCzVwOtcA66bzsytXfsiu1dZyz1tjMbYMZS3llrXM4nypXy5jh+HADOjD4M0w297npdO7swcPvtMtv+YdcCWXGwaoKwBgHYyPgLbbcR46HnTGLNseZZw/k5meHm9HP0523gAfLRQ+4Xne9znnl8QV2lY+Y3tStv2d/qmpP7alFyE8Z8C15cs/Wm807kKLXo2WmbM9k58wyjEkdvX29NyefvvtN0wySXkdO8ivuSZVGRu7B93uFgBNJSmQMVaDrD9efXmMaziwFL0inUjfslzO2AOZkZFb2eOPu0l0VJmOAPN8/qwq57+CoxerBsU0AB6AgzQWR51U6s9scvJdMT+kebH4garrngvZ9ZBdD7urwjzTG3afcxj7LCuV/mXKb8VrG3ClUFiFWfdpdOEVJsNBKz50BmOPpEulQyaZOF4tnx86wfkNcO7myNZnbAKz+hWZqakDcfbE/LYAV/P5izzOnwDYrGiEaBhq4LUDfXtbX7n8NzW/k/SxwcGPoN9+F7pfxFDo0WwwNmszdpVTKv1Gy4tgJAYctOyYESxj45hQrk46ofAVKxZZjQZDF69F+CWxg4lxF1p7WMqgBECjpUeStnQiwDRmK5zvNXVjdOGnnGz282z//qrmDBg0uVX37r2Sed5aOPxJsPJorT6SReHHMG5nYPdl27Z/2+95j7Fy+T3KUx++erVTnZ39BWx8Rs0D6IkMY+cnGdOxgH2Hx8Z2oyBtggLY7ehOW/EGBv2p5PMbMd7vRU5Bz9U5cOYd/O7t37LlfnbHHZ4qAR8YhtU2vG9T8+DDc87IyGVxs3cs4Nlc7j60wDcMBWzHKuh2lU9p37Fc7seohS+Z8uN4cOoF3te3MWqJidXcXSbQWJ3dly2VvtnKfkvA/tip1/fDcek763fjUmlDi5a9Ey27VS0Y8odhay8KHUetHEc+fYrOA11UZdFN92Wy2U+ZhkrQ0k/iLXVv2HV7e3tXt5pL9JlPKJlWUAaw4/6YjerGhcIG7roSWACt4/v6w/4lS7axV189JhQR9oabUM7d4DvNPM7XVI4c+RHSX2jyAoIqGmP6cxjTrwB0cyIjX/1Vn2VtVHXCdGQL+2tj190HI00ZEA3U4HBUDfo1n8u9Dp1zhAI86K1zyuU9Ic/0pm9v3fN+B93BMB96PNXTc2Hf5ORYyBPfQQ8ch06z4UjHTqXWRK29I3cy/kZAABsUtCMKLOWjki4Swfo6jN0dB5bkaJGCb+oGOOz5evgDW6zhuteHafUd+LJD5JOO63nfE3kibQRcHRz8GFpL2vWgG9VoUSEqqzR0Nok80nHQlUVeK7p/evoPyH9KlKHeIaZVmnyiciQ+55fSNlXiBQkjYI+xy1Vh1NxDsSsozs8Q9aDzS3xX/yny4mg4/4wog0ocwFo7cnNBPqGch0UdojEZahiIbwSMmWQ9ZYoPrY3FtInG2NkOh/8e5E31plJ3muRa8hjTlqXVVEpbyoo2UMu6b56nYSAdDTCFZdCNLhANAsSBJBsBTBR/cpYsyVk9PasyixevPHNyclK0k4j2vLNFOZR93JmY+IfIU+n09PRb5KPIB4YRwiLyiG7ObmEGxaAwa0gVge4xGubHvfHZqUPmr3FyUfko+1Il7yDAoNe2fnwfhW0lFGzCAq2doqYEjDL8gJsoAZr2swqrK8mj+fx5AHetaBxlSw6LeSJt8tGERQOMFQ5FF6XH6e19TWJ0IXE0l/swPidPYJISJ74KT6d/nqQ4CjBocowtVXk6YIRcRCHUeI0dOnRE5M03/V6xWMS+90XYLSi2b8nEjN9QnqIp5GuYDt5a42mA0fclIaRnFCPzmpwtFs9pNBov4sswJBqG8w9ny+Wfirw4Gr4eFmXQW6TGozwNMAqWhTiXjIgG50ojonE+AgEvwdHmcjKwudPZvPlrbdtHMF/RkRqP8nTAika3khizaxDzeB72PyiWgZZ9NLNly3Wm/bAoF0Hja9T60QFjCyepGCYxKb+DBMWqEBvbjd4kLSjgzD3YY3+lQ7D4nGiTlNriegujiiQhpOUu3gFAVcVl7GfoxvKiwLZvxSbjW6psO2nVV/QWufFgTG9hfeCn+dDQ4nYKbiWLYOCnMZlI4SJqWUQqftBKLy6PYtuwm1bkpMajPB2wPvCtar3+ccVQ50nXvUFURquU+gcGtoq8TmgK5Gt6hglXA0xHlqoilm3GhbgqF5f2w7OWdZkkZ9v3B8tRid1uwuSjCYsGmM5nUetY0p56sGybF8CVRmM5xq4fom1aPzlTN5OdEqqPhIGwqPY0wBQphFNjoiDGxioKwYi8TuiU6zqiHiaVE47jvCXyOqHJN/JR1CUMpqinBthXYuxZUZloOutRee2m+xYt+gt03gz14ORjiEqeCNOdvuHbjZouDtQ1HhhGwDZO3lVhdJGb6fup8ttJs4mJ41Zf34WIXX09xdjmzMDApnb0TbLkE3y7Sc1DF9cwkAxkzQ9iQnvQApeIuRD+SaZc/rLI+2/TlcHBR9F95YA/bg1kp6fXmnwztjAJ4qzn2wAIW9KziUKjEqeDBCoSDcAjKzupycAXqZeQz3RFIspGJGA/rotrBqIi0Pcg0L2LDrZEfjs0WuSrOHN61/+BbkdXlCUffF/UqA18jopJk34kYMqkOxWoMWxVTz1omWFE/Hd20kK1oaGVsPSgv4Y+uY5+MOCdKiABRWUHJ4nDojj5Sj6LPJVuCZgC3figP6AqocAr6RRP5celG/V6Eb2k2ZWJxl64EKen5gcniNK5EsmQr60OCkimJWAS8C+QGBYHAH1bcIrXBEDyrZ7+bPZlCJdCGaL7M5lXwnTcm1o26uQQ3/Tnydc4G4mcncuBuOoAjmOW4RjH/6ZjYnwE421GlTGl/2MH4mHh83nlIbSZ9O0fmtFkKZwUNnW7ceUhNI6xczE27rvUjTvlo6s08OrGpRbaSW2iLwSVIz3dvNQSFvR/dW0pBN3GxbTXMZmMois+S7HtqHAvBRhozw3ZdZC9HD9pIxCWG75pgsLFtGuTXGIJdcJ3okkrFBbfc7h6SLd2ToZeTperhyLwYEL5379cKoImulvXh9F9f03r+lbLRdWXVumOu3SUUbo94B+oI0oC4xdgdo1d3Ii2oEMXxH+PkOso6KfftxfERadD+v34LwChbwvvhRpYqIHTswb+DUHIU7wT/wUcAAAAAElFTkSuQmCC"
                    alt
                    class="ml-5"
                  >
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 套餐 -->
      <div data-v-507c9a80 class="module-box-wrapper white-bg margin-top">
        <div data-v-c1173c4a data-v-507c9a80 class="module-box">
          <div data-v-c1173c4a class="module-header flex flex-justify-between flex-align-center">
            <div data-v-c1173c4a class="module-title flex flex-align-center large">
              <span data-v-c1173c4a>推</span>
              <span data-v-c1173c4a>荐</span>
              <span data-v-c1173c4a>套</span>
              <span data-v-c1173c4a>餐</span>
            </div>
            <div data-v-c1173c4a class="module-content flex flex-align-center"></div>
            <div data-v-c1173c4a class="module-operation">
              <a data-v-c1173c4a href="javascript:" class="grey-9 flex flex-center font-12"></a>
            </div>
          </div>
          <div data-v-507c9a80 data-v-c1173c4a class="flex padding-top mt-5">
            <img
              data-v-507c9a80
              data-v-c1173c4a
              src="https://img2.ch999img.com/pic/product/70x70/20190308180221753.jpg"
              alt
              class="goods-img"
            >
            <div data-v-507c9a80 data-v-c1173c4a class="margin-left font-12">
              <p data-v-507c9a80 data-v-c1173c4a class="lines-1">Apple iPhone XR(A2108) 全网通版黑色 64GB</p>
              <p data-v-507c9a80 data-v-c1173c4a class="margin-top">
                <span data-v-507c9a80 data-v-c1173c4a class="red">￥5199.00</span>
              </p>
            </div>
          </div>
          <div
            data-v-507c9a80
            data-v-c1173c4a
            class="flex flex-align-center"
            style="margin-top: 17px;"
          >
            <span
              data-v-6bab7188
              data-v-507c9a80
              class="checkbox ml-5 checked small"
              data-v-c1173c4a
              style="background: rgb(242, 28, 28); border-color: rgb(242, 28, 28);"
            ></span>
            <img
              data-v-507c9a80
              data-v-c1173c4a
              src="https://img2.ch999img.com/pic/product/216x216/20180928153729137.jpg"
              alt
              class="goods-img margin-left margin-right"
            >
            <div data-v-507c9a80 data-v-c1173c4a class="font-12">
              <a data-v-507c9a80 href="/product/68231.html" class data-v-c1173c4a></a>
              <p data-v-507c9a80>触宝 iPhone XR 全屏2.5D钢化膜</p>
              <p data-v-507c9a80 data-v-c1173c4a class="margin-top">
                <span data-v-507c9a80 data-v-c1173c4a class="red">￥79.00</span>
                <span
                  data-v-507c9a80
                  data-v-c1173c4a
                  class="reduced-price grey-9 margin-left"
                >￥129.00</span>
              </p>
            </div>
          </div>
          <div
            data-v-507c9a80
            data-v-c1173c4a
            class="flex flex-align-center"
            style="margin-top: 17px;"
          >
            <span
              data-v-6bab7188
              data-v-507c9a80
              class="checkbox ml-5 checked small"
              data-v-c1173c4a
              style="background: rgb(242, 28, 28); border-color: rgb(242, 28, 28);"
            ></span>
            <img
              data-v-507c9a80
              data-v-c1173c4a
              src="https://img2.ch999img.com/pic/product/216x216/20181022175508196.jpg"
              alt
              class="goods-img margin-left margin-right"
            >
            <div data-v-507c9a80 data-v-c1173c4a class="font-12">
              <a data-v-507c9a80 href="/product/71371.html" class data-v-c1173c4a></a>
              <p data-v-507c9a80>LIDIAN 苹果 iPhone XR TPU 保护壳</p>
              <p data-v-507c9a80 data-v-c1173c4a class="margin-top">
                <span data-v-507c9a80 data-v-c1173c4a class="red">￥30.00</span>
                <span
                  data-v-507c9a80
                  data-v-c1173c4a
                  class="reduced-price grey-9 margin-left"
                >￥49.00</span>
              </p>
            </div>
          </div>
          <div
            data-v-507c9a80
            data-v-c1173c4a
            class="flex flex-align-center"
            style="margin-top: 17px;"
          >
            <span
              data-v-6bab7188
              data-v-507c9a80
              class="checkbox ml-5 checked small"
              data-v-c1173c4a
              style="background: rgb(242, 28, 28); border-color: rgb(242, 28, 28);"
            ></span>
            <img
              data-v-507c9a80
              data-v-c1173c4a
              src="https://img2.ch999img.com/pic/product/216x216/20180515110637955.jpg"
              alt
              class="goods-img margin-left margin-right"
            >
            <div data-v-507c9a80 data-v-c1173c4a class="font-12">
              <a data-v-507c9a80 href="/product/64882.html" class data-v-c1173c4a></a>
              <p data-v-507c9a80>黑鱼 无线充电器</p>
              <p data-v-507c9a80 data-v-c1173c4a class="margin-top">
                <span data-v-507c9a80 data-v-c1173c4a class="red">￥99.00</span>
                <span
                  data-v-507c9a80
                  data-v-c1173c4a
                  class="reduced-price grey-9 margin-left"
                >￥129.00</span>
              </p>
            </div>
          </div>
          <div
            data-v-507c9a80
            data-v-c1173c4a
            class="margin-top flex flex-align-end padding-top padding-bottom"
          >
            <span data-v-507c9a80 data-v-c1173c4a class="ml-5">总价</span>
            <p data-v-507c9a80 data-v-c1173c4a class="flex flex-align-end margin-left red">
              <span data-v-507c9a80 data-v-c1173c4a class="font-12">￥</span>
              <span data-v-507c9a80 data-v-c1173c4a class="font-15">5407</span>
              <span data-v-507c9a80 data-v-c1173c4a class="font-12">.00</span>
            </p>
            <p
              data-v-507c9a80
              data-v-c1173c4a
              class="flex flex-align-end margin-left grey-9"
              style="text-decoration: line-through;"
            >
              <span data-v-507c9a80 data-v-c1173c4a class="font-12">￥</span>
              <span data-v-507c9a80 data-v-c1173c4a class="font-15">5506</span>
              <span data-v-507c9a80 data-v-c1173c4a class="font-12">.00</span>
            </p>
            <p data-v-507c9a80 data-v-c1173c4a class="flex flex-align-end margin-left grey-9">
              <span data-v-507c9a80 data-v-c1173c4a class="font-12">节省</span>
              <span data-v-507c9a80 data-v-c1173c4a class="font-12">￥</span>
              <span data-v-507c9a80 data-v-c1173c4a class="font-14">99</span>
              <span data-v-507c9a80 data-v-c1173c4a class="font-12">.00</span>
            </p>
          </div>
          <div
            data-v-507c9a80
            data-v-c1173c4a
            class="recommend-package-btn mt-5 text-center white font-15 margin-bottom"
          >购买此套餐（4件商品）</div>
        </div>
      </div>
      <!-- 推荐 -->
      <div data-v-27abcf3c class="module-box-wrapper margin-top white-bg">
        <div data-v-c1173c4a data-v-27abcf3c class="module-box">
          <div data-v-c1173c4a class="module-header flex flex-justify-between flex-align-center">
            <div data-v-c1173c4a class="module-title flex flex-align-center large">
              <span data-v-c1173c4a>推</span>
              <span data-v-c1173c4a>荐</span>
              <span data-v-c1173c4a>商</span>
              <span data-v-c1173c4a>品</span>
            </div>
            <div data-v-c1173c4a class="module-content flex flex-align-center"></div>
            <div data-v-c1173c4a class="module-operation">
              <a
                data-v-c1173c4a
                href="https://m.9ji.com/product/recommend/parts/2/68436"
                class="grey-9 flex flex-center font-12"
              >
                <span data-v-c1173c4a>查看更多</span>
              </a>
              <!---->
              <!---->
            </div>
          </div>
          <div data-v-27abcf3c data-v-c1173c4a class="white-bg page-list" style="height: 370px;">
            <div data-v-27abcf3c class="mint-swipe grey-active" data-v-c1173c4a>
              <mt-swipe :auto="4000" id="myrecommend">
                <mt-swipe-item data-v-27abcf3c v-for="(item,idx) in 5" :key="idx">
                  <div data-v-27abcf3c class="flex flex-wrap">
                    <a
                      data-v-27abcf3c
                      href="https://m.9ji.com/product/68186"
                      class="guess-item-wrap flex flex-justify-center"
                    >
                      <div data-v-27abcf3c class="guess-item flex flex-col">
                        <img
                          data-v-1620e4da
                          data-v-27abcf3c
                          src="https://img2.ch999img.com/pic/product/440x440/20181101141815489.jpg.webp"
                          class="lazy-img guess-item-img"
                        >
                        <p
                          data-v-27abcf3c
                          class="guess-item-name grey-6 font-12"
                          style="-webkit-box-orient: vertical;"
                        >苹果 iPhone XR 硅胶 定制 保护壳</p>
                        <p data-v-27abcf3c class="guess-item-price font-12 bold">¥159.00</p>
                      </div>
                    </a>
                    <a
                      data-v-27abcf3c
                      href="https://m.9ji.com/product/68240"
                      class="guess-item-wrap flex flex-justify-center"
                    >
                      <div data-v-27abcf3c class="guess-item flex flex-col">
                        <img
                          data-v-1620e4da
                          data-v-27abcf3c
                          src="https://img2.ch999img.com/pic/product/440x440/20180929105231555.png.webp"
                          class="lazy-img guess-item-img"
                        >
                        <p
                          data-v-27abcf3c
                          class="guess-item-name grey-6 font-12"
                          style="-webkit-box-orient: vertical;"
                        >乐物 iPhone XR 全屏3D钢化膜</p>
                        <p data-v-27abcf3c class="guess-item-price font-12 bold">¥169.00</p>
                      </div>
                    </a>
                    <a
                      data-v-27abcf3c
                      href="https://m.9ji.com/product/51852"
                      class="guess-item-wrap flex flex-justify-center"
                    >
                      <div data-v-27abcf3c class="guess-item flex flex-col">
                        <img
                          data-v-1620e4da
                          data-v-27abcf3c
                          src="https://img2.ch999img.com/pic/product/440x440/20190318001416621.jpg.webp"
                          class="lazy-img guess-item-img"
                        >
                        <p
                          data-v-27abcf3c
                          class="guess-item-name grey-6 font-12"
                          style="-webkit-box-orient: vertical;"
                        >苹果 AirPods 蓝牙无线耳机</p>
                        <p data-v-27abcf3c class="guess-item-price font-12 bold">¥1260.00</p>
                      </div>
                    </a>
                    <a
                      data-v-27abcf3c
                      href="https://m.9ji.com/product/74108"
                      class="guess-item-wrap flex flex-justify-center"
                    >
                      <div data-v-27abcf3c class="guess-item flex flex-col">
                        <img
                          data-v-1620e4da
                          data-v-27abcf3c
                          src="https://img2.ch999img.com/pic/product/440x440/2019021514223912.jpg.webp"
                          class="lazy-img guess-item-img"
                        >
                        <p
                          data-v-27abcf3c
                          class="guess-item-name grey-6 font-12"
                          style="-webkit-box-orient: vertical;"
                        >亿觅 苹果lightning挂绳数据线</p>
                        <p data-v-27abcf3c class="guess-item-price font-12 bold">¥49.00</p>
                      </div>
                    </a>
                    <a
                      data-v-27abcf3c
                      href="https://m.9ji.com/product/62504"
                      class="guess-item-wrap flex flex-justify-center"
                    >
                      <div data-v-27abcf3c class="guess-item flex flex-col">
                        <img
                          data-v-1620e4da
                          data-v-27abcf3c
                          src="https://img2.ch999img.com/pic/product/440x440/20180224183344146.jpg.webp"
                          class="lazy-img guess-item-img"
                        >
                        <p
                          data-v-27abcf3c
                          class="guess-item-name grey-6 font-12"
                          style="-webkit-box-orient: vertical;"
                        >苹果 HomePod 智能音响</p>
                        <p data-v-27abcf3c class="guess-item-price font-12 bold">¥2699.00</p>
                      </div>
                    </a>
                    <a
                      data-v-27abcf3c
                      href="https://m.9ji.com/product/67791"
                      class="guess-item-wrap flex flex-justify-center"
                    >
                      <div data-v-27abcf3c class="guess-item flex flex-col">
                        <img
                          data-v-1620e4da
                          data-v-27abcf3c
                          src="https://img2.ch999img.com/pic/product/440x440/20180930114129769.jpg.webp"
                          class="lazy-img guess-item-img"
                        >
                        <p
                          data-v-27abcf3c
                          class="guess-item-name grey-6 font-12"
                          style="-webkit-box-orient: vertical;"
                        >TOTU PD+QC 双口充电器</p>
                        <p data-v-27abcf3c class="guess-item-price font-12 bold">¥99.00</p>
                      </div>
                    </a>
                  </div>
                </mt-swipe-item>
              </mt-swipe>
              <div class="mint-swipe-indicators">
                <div class="mint-swipe-indicator"></div>
                <div class="mint-swipe-indicator"></div>
                <div class="mint-swipe-indicator"></div>
                <div class="mint-swipe-indicator"></div>
                <div class="mint-swipe-indicator"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 评论 -->
      <div data-v-4fdf5edc id="comments" class="module-box-wrapper white-bg margin-top">
        <div data-v-c1173c4a data-v-4fdf5edc class="module-box">
          <div data-v-c1173c4a class="module-header flex flex-justify-between flex-align-center">
            <div data-v-c1173c4a class="module-title flex flex-align-center large">
              <span data-v-c1173c4a>评</span>
              <span data-v-c1173c4a>论</span>
            </div>
            <div data-v-c1173c4a class="module-content flex flex-align-center"></div>
            <div data-v-c1173c4a class="module-operation">
              <a
                data-v-c1173c4a
                href="/product/comment/35741"
                class="grey-9 flex flex-center font-12"
              >
                <span data-v-c1173c4a>更多评价</span>
              </a>
            </div>
          </div>
          <div data-v-4fdf5edc data-v-c1173c4a class="comments-wrapper padding-top">
            <div data-v-4fdf5edc data-v-c1173c4a class="h-scroll-item comment-item mt-5">
              <div data-v-4fdf5edc data-v-c1173c4a class="comment-header flex">
                <div data-v-4fdf5edc data-v-c1173c4a class="avatar-box">
                  <img
                    data-v-1620e4da
                    data-v-4fdf5edc
                    src="https://img2.ch999img.com//images/usericon.png.webp"
                    class="lazy-img"
                    data-v-c1173c4a
                  >
                </div>
                <div data-v-4fdf5edc data-v-c1173c4a class="flex-child-average padding-left">
                  <div data-v-4fdf5edc data-v-c1173c4a class="flex flex-justify-between">
                    <span data-v-4fdf5edc data-v-c1173c4a>183****5701</span>
                    <span data-v-4fdf5edc data-v-c1173c4a class="grey-9">2018-10-29</span>
                  </div>
                  <div data-v-4fdf5edc data-v-c1173c4a class="stars"></div>
                </div>
              </div>
              <div
                data-v-4fdf5edc
                data-v-c1173c4a
                class="comment-content"
                style="-webkit-box-orient: vertical;"
              >超爱！本来一直被网上的关于屏幕和边框的说法吓到，收到后才感觉都还不错！没网上说的那么差！很不错的一次购物！手机使用一段时间再评价！</div>
              <div data-v-4fdf5edc data-v-c1173c4a class="margin-top">
                <a data-v-4fdf5edc data-v-c1173c4a href="javascript:" class="grey-9">77</a>
                <a
                  data-v-4fdf5edc
                  href="/product/comment/35741/reply/5bd6f1b0b47fc528402eeda2"
                  class="grey-9 margin-left"
                  data-v-c1173c4a
                >19</a>
              </div>
            </div>
          </div>
        </div>
        <div data-v-c1173c4a data-v-4fdf5edc class="module-box border-top padding-top">
          <div data-v-c1173c4a class="module-header flex flex-justify-between flex-align-center">
            <div data-v-c1173c4a class="module-title flex flex-align-center large">
              <span data-v-c1173c4a>买</span>
              <span data-v-c1173c4a>家</span>
              <span data-v-c1173c4a>相</span>
              <span data-v-c1173c4a>册</span>
            </div>
            <div data-v-c1173c4a class="module-content flex flex-align-center"></div>
            <div data-v-c1173c4a class="module-operation">
              <a
                data-v-c1173c4a
                href="/product/comment/35741?type=5"
                class="grey-9 flex flex-center font-12"
              >
                <span data-v-c1173c4a>全部(130)</span>
              </a>
            </div>
          </div>
          <div data-v-4fdf5edc data-v-c1173c4a class="padding-top">
            <div
              data-v-4fdf5edc
              data-v-c1173c4a
              class="comment-img-list mt-5 flex flex-justify-between"
            >
              <div
                data-v-4fdf5edc
                data-v-c1173c4a
                class="img-box"
                style="background-image: url(&quot;https://img2.ch999img.com//newstatic/919/7880bbc4e7c1c5.jpg&quot;);"
              ></div>
              <div
                data-v-4fdf5edc
                data-v-c1173c4a
                class="img-box"
                style="background-image: url(&quot;https://img2.ch999img.com//newstatic/921/7880bc2d31ca67.jpg&quot;);"
              ></div>
              <div
                data-v-4fdf5edc
                data-v-c1173c4a
                class="img-box"
                style="background-image: url(&quot;https://img2.ch999img.com//newstatic/924/7880bd414861c1.jpg&quot;);"
              ></div>
              <div
                data-v-4fdf5edc
                data-v-c1173c4a
                class="img-box"
                style="background-image: url(&quot;https://img2.ch999img.com//newstatic/1212/c7228982ba20ec.jpg&quot;);"
              ></div>
            </div>
          </div>
        </div>
        <div
          data-v-4fdf5edc
          tabindex="-1"
          role="dialog"
          aria-hidden="true"
          class="pswp photo-package"
        >
          <div class="pswp__bg"></div>
          <div class="pswp__scroll-wrap">
            <div class="pswp__container">
              <div class="pswp__item"></div>
              <div class="pswp__item"></div>
              <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
              <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <div class="pswp__preloader">
                  <div class="pswp__preloader__icn">
                    <div class="pswp__preloader__cut">
                      <div class="pswp__preloader__donut"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
              </div>
              <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- 提问 -->
      <div class="module-box-wrapper white-bg margin-top">
        <div data-v-c1173c4a class="module-box">
          <div data-v-c1173c4a class="module-header flex flex-justify-between flex-align-center">
            <div data-v-c1173c4a class="module-title flex flex-align-center large">
              <span data-v-c1173c4a>问</span>
              <span data-v-c1173c4a>大</span>
              <span data-v-c1173c4a>家</span>
            </div>
            <div data-v-c1173c4a class="module-content flex flex-align-center"></div>
            <div data-v-c1173c4a class="module-operation">
              <a data-v-c1173c4a href="/product/faq/68436" class="grey-9 flex flex-center font-12">
                <span data-v-c1173c4a>全部(34)</span>
              </a>
            </div>
          </div>
          <a href="/product/faq/68436" class="block margin-top" data-v-c1173c4a></a>
          <div class="flex" style="padding: 5px 0px;">
            <img
              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAABUlJREFUWAm9WF1oHFUUvndmZ7PZ7Mb4U6k6uyYmJqAYH4I2wZ++CFVELaXFPhT8SR9S65ugPklA8UFLURGFSmihQdBiQYsS2qotpfXFUBTjT5pNdnc2tTW1sTubzW52do7fnbjLzGZnspttvBDm3HO+c84355575244W8NYiEb7iow9xon6iegezthNjPMbEOoqI/qTGLvIOR+XGPsqmEyOQ4aqtoFYtQ1qbw8sFIs7TcZeQtIHavNi4MlngT0UUpR3+fT0tdX8aiKUiUS24BVHUI07VgvoYf9b4vztltbWD/nExJIbzpMQ9fa2ZObn94HIkFuANejPSYqyLTQzc7marysh6upq1fP5E1ieB6s5NqJD0pQkSVtb0F+VcdB3K4dVmXz+6/UgI7Jh+dUi0clcR0dPZfYVhLA8HMv0BZ4PV4Kv65yobalQOEbR6I32uCsI6ZHIIMhssYMqZZTcwF/NW7nS3za/WzfNUducOXoo096+0SwWf8NStdlBDpnzaV9T02YqFDYAOwZWt2Jv/4MzKe7AlSacKxA78ZKBkqryiao8EUqlxoTeZzeSab7pSUaAiQrNqnqJnzqVSkci2/FGJ2S/vzcYi2n2WHY53d19C89mT4L8/XZ9SSbO36Hh4eN8eNgsLxn19QVB6NkSyOPZk4nF3hP2Vk07gyTHzXzevaICNzl5BWfQB24xUb37MgcPbhX2coUW5ua2YR52cxJ6nLqnfbL8fNEwhtLR6OtQneGm2Q9S51Gt9ApfIpPL8o5wIvE9k6TLrIgPjtsgEvmPlgmB5XNu2JIepR1rjsfjmY6OT1mh8JPQg8zyIHLslpIavaWWECVdtSfyP4lVUuyE+qsBvXTon59Jkvbi7a/YcQjaZhiGWNZNdr2njI2kz81tsgjpXV0bKJcLeTpUMSp+//bA9PSFKiamd3Y+Tfl81c9DNbzQoaHbLUKyYdxluKE89E2KckmYcXYNoeRPCRnN+21I0/aHY7G/dFUtr6iwrTZM07zdIlQ0zchqYC87sj4D++MCYxLdjMd+Idc7sGlus7Y93mqxXuf1wKMnF60KgZmjKetNhkBn4bPR8uP8x3r9S3hUOmURYrJ8kRn1d1GuUBBbXQ9r2lt4ir/ywA2zTTcMDrI1DyzXMiFx7KdVNQHPO2v2BtAoFEZzqvpik8/nqPCiLIf1paUD9cQSWFlRfl+ukJhx/h2+Uy8IsdaBnfUI7qIXliqra5sD43pdtedB20zgCJksf8tg/NIOaERG8Jfxgo9ySdoRCga/EbHw46DZMybREWEvVyg8OHhMHxmZQpW63BzxGZCFDd8v6+mGw31jLKBpMYedaLNjbpugz4h8vs+EytFzOOD2oMQf2bAOEW/+K46I13DW7ALO/WbA+Qywh3F7SOLZBOwAAu1yBLNPOD+Em4PVLg5CpKrNOmPiuPf86ttjNSxznpZ8vu7SrxB7DzGeSokD8peGk9QRABV/o0RGuDkI/Rfnah3xGoJieT4JJZPv24NUI9RtB6yXDDJHQwMDeyrjO3pIj0bvRSP+H0s2Gg4EdvOpqXwlofK2FwbshlcrAdd5ruMX614s02G3uOUK4Y78EM4XcWkv69yc1qDP4Fb5MVeUfeKe5OVvJaeenrCezZ5HiTq9wPXYEFjc6E/jxD4SIvocO7imzWItWSabPdAIGSQ38QMgAQJ/QB7HspwLEv3Ak8n5el5CYH34388rOHl3ejnitM2BcByYWSSeRdIUZA2JNfjOhPz+WLUG9YrpZvOhkXejrNeQRIMcR/IE5DgSxyWiBMmy1oL/5UCP9lr/8S92FwqKAZWPVQAAAABJRU5ErkJggg=="
              style="width: 18px; height: 18px;"
            >
            <div class="ml-5">
              <p class="line-height-1_2">这个活动实体店也搞吗</p>
              <p class="grey-9 mt-5 font-12">0个回答</p>
            </div>
          </div>
          <div class="flex" style="padding: 5px 0px;">
            <img
              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAABUlJREFUWAm9WF1oHFUUvndmZ7PZ7Mb4U6k6uyYmJqAYH4I2wZ++CFVELaXFPhT8SR9S65ugPklA8UFLURGFSmihQdBiQYsS2qotpfXFUBTjT5pNdnc2tTW1sTubzW52do7fnbjLzGZnspttvBDm3HO+c84355575244W8NYiEb7iow9xon6iegezthNjPMbEOoqI/qTGLvIOR+XGPsqmEyOQ4aqtoFYtQ1qbw8sFIs7TcZeQtIHavNi4MlngT0UUpR3+fT0tdX8aiKUiUS24BVHUI07VgvoYf9b4vztltbWD/nExJIbzpMQ9fa2ZObn94HIkFuANejPSYqyLTQzc7marysh6upq1fP5E1ieB6s5NqJD0pQkSVtb0F+VcdB3K4dVmXz+6/UgI7Jh+dUi0clcR0dPZfYVhLA8HMv0BZ4PV4Kv65yobalQOEbR6I32uCsI6ZHIIMhssYMqZZTcwF/NW7nS3za/WzfNUducOXoo096+0SwWf8NStdlBDpnzaV9T02YqFDYAOwZWt2Jv/4MzKe7AlSacKxA78ZKBkqryiao8EUqlxoTeZzeSab7pSUaAiQrNqnqJnzqVSkci2/FGJ2S/vzcYi2n2WHY53d19C89mT4L8/XZ9SSbO36Hh4eN8eNgsLxn19QVB6NkSyOPZk4nF3hP2Vk07gyTHzXzevaICNzl5BWfQB24xUb37MgcPbhX2coUW5ua2YR52cxJ6nLqnfbL8fNEwhtLR6OtQneGm2Q9S51Gt9ApfIpPL8o5wIvE9k6TLrIgPjtsgEvmPlgmB5XNu2JIepR1rjsfjmY6OT1mh8JPQg8zyIHLslpIavaWWECVdtSfyP4lVUuyE+qsBvXTon59Jkvbi7a/YcQjaZhiGWNZNdr2njI2kz81tsgjpXV0bKJcLeTpUMSp+//bA9PSFKiamd3Y+Tfl81c9DNbzQoaHbLUKyYdxluKE89E2KckmYcXYNoeRPCRnN+21I0/aHY7G/dFUtr6iwrTZM07zdIlQ0zchqYC87sj4D++MCYxLdjMd+Idc7sGlus7Y93mqxXuf1wKMnF60KgZmjKetNhkBn4bPR8uP8x3r9S3hUOmURYrJ8kRn1d1GuUBBbXQ9r2lt4ir/ywA2zTTcMDrI1DyzXMiFx7KdVNQHPO2v2BtAoFEZzqvpik8/nqPCiLIf1paUD9cQSWFlRfl+ukJhx/h2+Uy8IsdaBnfUI7qIXliqra5sD43pdtedB20zgCJksf8tg/NIOaERG8Jfxgo9ySdoRCga/EbHw46DZMybREWEvVyg8OHhMHxmZQpW63BzxGZCFDd8v6+mGw31jLKBpMYedaLNjbpugz4h8vs+EytFzOOD2oMQf2bAOEW/+K46I13DW7ALO/WbA+Qywh3F7SOLZBOwAAu1yBLNPOD+Em4PVLg5CpKrNOmPiuPf86ttjNSxznpZ8vu7SrxB7DzGeSokD8peGk9QRABV/o0RGuDkI/Rfnah3xGoJieT4JJZPv24NUI9RtB6yXDDJHQwMDeyrjO3pIj0bvRSP+H0s2Gg4EdvOpqXwlofK2FwbshlcrAdd5ruMX614s02G3uOUK4Y78EM4XcWkv69yc1qDP4Fb5MVeUfeKe5OVvJaeenrCezZ5HiTq9wPXYEFjc6E/jxD4SIvocO7imzWItWSabPdAIGSQ38QMgAQJ/QB7HspwLEv3Ak8n5el5CYH34388rOHl3ejnitM2BcByYWSSeRdIUZA2JNfjOhPz+WLUG9YrpZvOhkXejrNeQRIMcR/IE5DgSxyWiBMmy1oL/5UCP9lr/8S92FwqKAZWPVQAAAABJRU5ErkJggg=="
              style="width: 18px; height: 18px;"
            >
            <div class="ml-5">
              <p class="line-height-1_2">双卡双待怎么只有一个卡槽？</p>
              <p class="grey-9 mt-5 font-12">0个回答</p>
            </div>
          </div>
        </div>
      </div>

      <!-- 详情 -->
      <div data-v-2292038c id="detail" class="margin-top">
        <div data-v-2292038c class="introduce-wrapper">
          <div data-v-2292038c style="height: 44px; display: none;"></div>
          <div data-v-2292038c class="module-tap-row border-bottom flex" style="top: 0px;">
            <a data-v-2292038c href="javascript:;" class="flex-child-average red">
              <span data-v-2292038c>图文详情</span>
            </a>
            <a data-v-2292038c href="javascript:;" class="flex-child-average">
              <span data-v-2292038c class="border-left">详细参数</span>
            </a>
            <a data-v-2292038c href="javascript:;" class="flex-child-average">
              <span data-v-2292038c class="border-left">售后保障</span>
            </a>
          </div>
          <div data-v-2292038c class="overflow-hide detail-html detail-html-padding">
            <div data-v-2292038c>
              <p style="text-align: center;">
                <a href="https://m.9ji.com/news/13611.html" target="_blank">
                  <img
                    src="https://img2.ch999img.com//pic/edt/product/20180929/20180929115036_8452.jpg.webp"
                    title
                    alt
                  >
                </a>
                <br>
              </p>
              <p style="text-align: center;">
                <img
                  src="https://img2.ch999img.com//pic/edt/product/20180930/20180930193537_5872.jpg.webp"
                  style
                >
              </p>
              <p style="text-align: center;">
                <img
                  src="https://img2.ch999img.com//pic/edt/product/20190116/20190116172259_2505.jpg.webp"
                  title
                  alt
                >
              </p>
              <p style="text-align: center;">
                <img
                  src="https://img2.ch999img.com//pic/edt/product/20180930/20180930193539_4690.jpg.webp"
                  style
                >
              </p>
              <p style="text-align: center;">
                <img
                  src="https://img2.ch999img.com//pic/edt/product/20180929/20180929115105_9713.jpg.webp"
                >
              </p>
              <p style="text-align: center;">
                <img
                  src="https://img2.ch999img.com//pic/edt/product/20180929/20180929115106_9222.jpg.webp"
                  style
                >
              </p>
              <p style="text-align: center;">
                <img
                  src="https://img2.ch999img.com//pic/edt/product/20180929/20180929115107_9160.jpg.webp"
                  style
                >
              </p>
              <p style="text-align: center;">
                <img
                  src="https://img2.ch999img.com//pic/edt/product/20180929/20180929115118_0451.jpg.webp"
                  style
                >
              </p>
              <p style="text-align: center;">
                <img
                  src="https://img2.ch999img.com//pic/edt/product/20180929/20180929115118_9190.jpg.webp"
                  style
                >
              </p>
              <p style="text-align: center;">
                <img
                  src="https://img2.ch999img.com//pic/edt/product/20180929/20180929115119_8979.jpg.webp"
                  style
                >
              </p>
              <p style="text-align: center;">
                <img
                  src="https://img2.ch999img.com//pic/edt/product/20180929/20180929115129_1325.jpg.webp"
                  style
                >
              </p>
              <p style="text-align: center;">
                <img
                  src="https://img2.ch999img.com//pic/edt/product/20180929/20180929115130_0213.jpg.webp"
                  style
                >
              </p>
              <p style="text-align: center;">
                <img
                  src="https://img2.ch999img.com//pic/edt/product/20180929/20180929115131_0954.jpg.webp"
                  style
                >
              </p>
              <p style="text-align: center;">
                <img
                  src="https://img2.ch999img.com//pic/edt/product/20180929/20180929115141_8910.jpg.webp"
                  style
                >
              </p>
              <p style="text-align: center;">
                <img
                  src="https://img2.ch999img.com//pic/edt/product/20180929/20180929115142_8819.jpg.webp"
                  style
                >
              </p>
              <p style="text-align: center;">
                <img
                  src="https://img2.ch999img.com//pic/edt/product/20180929/20180929115143_8879.jpg.webp"
                  style
                >
              </p>
              <p>
                <br>
              </p>
            </div>
          </div>
          <div data-v-2292038c class="detail-params-wrapper" style="display: none;">
            <div data-v-2292038c class="params-table-box">
              <table data-v-2292038c class="normal-table">
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">商品名称</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>Apple iPhone XR(A2108) 全网通版 黑色 64GB</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">品牌</td>
                  <td data-v-2292038c class="argument-value">
                    <a
                      data-v-2292038c
                      href="https://m.9ji.com/list/2-1-0-0-0-0-0-0-0-0-0_0"
                    >苹果（Apple）</a>
                  </td>
                </tr>
              </table>
            </div>
            <div data-v-2292038c class="params-table-box">
              <div data-v-2292038c class="params-table-header">显示屏幕</div>
              <table data-v-2292038c class="normal-table">
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">屏幕尺寸</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>6.1 英寸</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">主屏分辨率</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>1792 x 828 像素分辨率</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">屏幕像素密度</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>326 ppi</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">主屏材质</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>LCD</span>
                  </td>
                </tr>
              </table>
            </div>
            <div data-v-2292038c class="params-table-box">
              <div data-v-2292038c class="params-table-header">基本参数</div>
              <table data-v-2292038c class="normal-table">
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">机身内存</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>64GB</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">运行内存</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>3GB</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">产品特点</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>面部识别解锁,无线充电,全面屏,防水防尘,支持NFC</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">网络制式</td>
                  <td data-v-2292038c class="argument-value">
                    <span
                      data-v-2292038c
                    >4G全网通,移动4G（TD-LTE）,联通4G（TD/FDD-LTE）,电信4G（TD/FDD-LTE）,移动3G（TD-SCDMA）,联通3G（WCDMA）,电信3G（CDMA2000）,移动2G/联通2G（GSM ）,电信2G（CDMA）,双卡</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">CPU型号</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>A12 仿生</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">操作系统</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>苹果（iOS）</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">核心数</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>六核</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">储存卡类型</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>不支持</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">SIM卡规格</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>两个Nano SIM卡</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">机身尺寸</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>150.9mm*75.7mm*8.3mm（长x宽x厚）</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">机身重量</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>约194g</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">手机类型</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>4G手机,智能手机,双卡双待</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">上市时间</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>2018年10月</span>
                  </td>
                </tr>
              </table>
            </div>
            <div data-v-2292038c class="params-table-box">
              <div data-v-2292038c class="params-table-header">数码相机功能</div>
              <table data-v-2292038c class="normal-table">
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">拍摄特色</td>
                  <td data-v-2292038c class="argument-value">
                    <span
                      data-v-2292038c
                    >人像模式、双镜头光学图像防抖、六镜式镜头、全景模式、背照式感光元件、混合红外线滤镜、Focus Pixels 自动对焦、Focus Pixels 轻点对焦、智能 HDR、照片、拍摄广色域的照片和实况照片、局部色调映射功能、先进的红眼校正功能、曝光控制、自动图像防抖功能、连拍快照模式、计时模式、照片地理标记功能等</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">视频拍摄</td>
                  <td data-v-2292038c class="argument-value">
                    <span
                      data-v-2292038c
                    >4K视频拍摄，30 fps；1080p HD 视频拍摄，30 fps 或 60 fps；720p HD 视频拍摄，30 fps，视频光学图像防抖功能</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">闪光灯</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>四LED补光灯</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">前置摄像头像素</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>700万像素</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">后置摄像头像素</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>1200万像素</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">数码相机感光元件</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>CMOS</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">光学防抖</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>支持</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">摄像头数量</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>两个摄像头（前和后）</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">数码相机功能</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>支持</span>
                  </td>
                </tr>
              </table>
            </div>
            <div data-v-2292038c class="params-table-box">
              <div data-v-2292038c class="params-table-header">主要功能</div>
              <table data-v-2292038c class="normal-table">
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">陀螺仪</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>支持</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">电子罗盘</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>支持</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">距离感应</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>支持</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">光线感应</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>支持</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">指纹识别</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>不支持</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">重力感应</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>支持</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">NFC技术</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>支持</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">快速充电</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>支持（需使用快速充电器）</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">GPS导航</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>内置GPS,支持A-GPS,支持Glonass</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">Flash功能</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>支持</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">图形格式</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>支持JPEG、PNG、BMP等格式</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">视频播放</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>支持MP4、AVI、NAVI、HEVC、H.264、MPEG-4 Part 2 与 Motion JPEG等格式</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">音频播放</td>
                  <td data-v-2292038c class="argument-value">
                    <span
                      data-v-2292038c
                    >支持AAC-LC、HE-AAC、HE-AAC v2、Protected AAC、MP3、Linear PCM、Apple Lossless、FLAC、Dolby Digital (AC-3)、Dolby Digital Plus (E-AC-3) 与 Audible (格式 2、3、4，Audible Enhanced Audio、AAX 与 AAX+)等格式</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">耳机接口</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>Lightning</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">数据接口</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>Lightning</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">WLAN功能</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>WiFi</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">蓝牙传输</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>蓝牙5.0</span>
                  </td>
                </tr>
              </table>
            </div>
            <div data-v-2292038c class="params-table-box">
              <div data-v-2292038c class="params-table-header">配件</div>
              <table data-v-2292038c class="normal-table">
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">标配电池</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>2942mAh</span>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">电池设计</td>
                  <td data-v-2292038c class="argument-value">
                    <span data-v-2292038c>内置电池</span>
                  </td>
                </tr>
              </table>
            </div>
          </div>
          <div data-v-2292038c class="detail-afterService-wrapper" style="display: none;">
            <div data-v-2292038c class="params-table-box">
              <div data-v-2292038c class="params-table-header">质保政策</div>
              <div data-v-2292038c class="assurance-table">
                <p>
                  <br>
                </p>
                <table class="zbzc" data-sort="sortDisabled">
                  <tbody>
                    <tr class="firstRow">
                      <td rowspan="1" colspan="2">
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        <strong>九机网手机（含平板）质保政策</strong>
                      </td>
                    </tr>
                    <tr>
                      <td rowspan="1" colspan="2">
                        <p>根据国家“三包规定”，因制造商产品故障问题，可享受退换质保政策；产品没有故障，则不享受退换政策仅享受保修政策，若因用户原因导致产品故障的，将不在享受质保；因制造商产品故障问题的质保政策为：</p>
                        <p>
                          <strong>7天内</strong>：支持退货、换货、保修；
                        </p>
                        <p>
                          <strong>8天-15天</strong>：仅支持更换同型号同规格产品或选择保修；&nbsp;
                        </p>
                        <p>
                          <strong>1</strong>
                          <strong>6天-12个月</strong>：仅享受保修。
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td rowspan="1" colspan="2">
                        <strong>九机网依据国家"三包"规定，升级保障客户权益，手机和平板适用，具体质保政策如下：</strong>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <strong>故障类型</strong>
                      </td>
                      <td>
                        <strong>售后政策</strong>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <strong>制造商产品故障</strong>
                      </td>
                      <td>
                        <p>
                          <strong>7天内</strong>：九机网可为您退补差价更换其它机型；
                        </p>
                        <p>
                          <strong>8天-15天</strong>：九机网可为您以购机金额的88%进行退款；例：购买机器为2000元，包配完整全新，您还可退回：2000*88%=1760元
                        </p>
                        <p>
                          <strong>16天-12个月</strong>：九机网可为您提供折价退款，自购机之日起，第一个月内退款80%，每多一个月递增扣6%（不足一个月的按照一个月计）例：2个月退还购机金额74%的价格，3个月是68%......
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <strong>产品没有故障</strong>
                      </td>
                      <td>
                        <p>
                          <strong>购机日-15天内</strong>：九机网以购机金额的88%进行折价退款；例：购机为2000元，包配完整全新，您还可以退2000*88%=1760元整；
                        </p>
                        <p>
                          <strong>16天-12个月</strong>：九机网为您提供折价退款，自购机之日起，第一个月内退款80%，每多一个月递增扣6%（不足一个月的按照一个月计）例：2个月退还购机金额74%的价格，3个月是68%......
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <strong>用户原因导致的产品故障</strong>
                      </td>
                      <td>
                        <p>
                          <strong>九机网为您提供付费维修或旧机回收服务；</strong>
                        </p>
                        <p>备注：用户原因导致问题为机器不能保持100%原始状态，包括但不限于屏幕或机身，有刮花、刮伤，软件问题（ROOT、越狱等）和硬件问题（人为摔碰、进液等）及非厂家授权三包的修理者拆动等；</p>
                      </td>
                    </tr>
                    <tr>
                      <td rowspan="1" colspan="2">
                        <p>
                          <strong>保修细则说明</strong>
                        </p>
                        <p>1、新机由厂家承保，故障情况与否及故障原因归属问题存在争议的以厂家授权售后检测界定为准；</p>
                        <p>2、购机15天内享受退换的商品须保证100%原样退回，存在附件缺失或明显使用痕迹的需叠加折价：充头、数据线、耳机、转接线以九机官网售价或者对应品牌官网售价为准；包装盒:80 元/件；进网标、保卡和其他：50元/件；</p>
                        <p>3、附件非人为厂家质保政策为：充电头、数据线、转接线为质保一年（特殊：360、8848品牌为6个月、AGM为3个月；），耳机质保3个月（特殊：苹果、努比亚、黑莓为质保1年），存在差异部分会以厂家售后质保为基准；</p>
                        <p>4、因制造商产品问题导致的7天内退货，随机器一并购买的该机的壳、膜、九机服务、存储卡可原价退款，其它类配件按九机配件质保政策进行；</p>
                        <p>5、平板电脑系列厂家非人为质保部分以厂家保修为准则，具体如：苹果平板：显示屏和主板质保两年；亚马逊平板：显示屏、主板和附带电源适配器质保两年；微软整机和附件配件质保两年；</p>
                        <p>6、符合《网络购买商品七日无理由退货暂行办法》部分参照国家规定进行退换，厂家售后政策优于以上政策的以厂家售后政策为基准；</p>
                        <p>7、制造商产品故障为非人为产品性能故障（三包法），不包括以下所列问题：①产品功能正常无性能故障，但因各品牌厂家的产品配件供应商不同，导致的同样配置机型相同条件下的差异的；包括但不限于屏幕显示色差（冷暖屏），外观颜色，电池厂家不同等；②使用方法差异造成问题的；包括但不限于：软件和系统问题、网络原因、电池耗电速度、发热、手感等问题；③软件导致的非性能故障问题，即为通过软件处理能够排除的问题；④商品外观、网络制式等非性能故障问题进行退换货；</p>
                        <p>8、涉及有开具过纸质发票的商品退款，需原样退回发票，未在退款时提供的将会叠加暂扣3%退款手续费，发票归还后会做退回。</p>
                        <p>
                          <strong>※其他未尽事宜，以国家相关“三包规定”、《中华人民共和国消费者权益保护法》或相应品牌厂商授权规定政策处理。</strong>
                        </p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <p>
                  <br>
                </p>
              </div>
            </div>
            <div data-v-2292038c class="params-table-box">
              <div data-v-2292038c class="params-table-header">售后商品注意事项</div>
              <table data-v-2292038c class="normal-table">
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-only-value">
                    一、备用机：手机送修期间九机网将为您免费提供备用机（会视情况收取相应押金，机器归还后全额退还），若备用机出现遗失或损坏情况将按备用机出借协议标识的价值或九机网快修维修价格进行承担。
                    <br>二、九机代送修流程：涉及厂家质保部分，九机可免费为您代送至厂家售后处理，流程为：
                    <br>故障机器送九机门店→九机送至就近授权服务站点→站点检测维修（或返厂维修）→返回九机门店→通知您取机。
                    <br>三、手机平板送修所需资料：
                    <br>（一）购机日-15天：
                    <br>1. 苹果,美图：整机、保卡、发票；
                    <br>2. 华为,三星,摩托罗拉,8848,海信,夏普,黑莓,AGM,其他：全套包装、发票；
                    <br>3. OPPO,VIVO,金立,魅族,锤子,诺基亚,HTC,索尼,中兴,360,酷派,联想,小米,努比亚,一加：整机、保卡。
                    <br>（二）16天-12个月：
                    <br>1. 苹果：整机、保卡、发票；
                    <br>2. 小米，三星，美图，OPPO，VIVO，金立：整机、保卡；
                    <br>3. 华为，魅族，锤子，诺基亚，海信，夏普，黑莓，AGM，摩托罗拉，8848，努比亚，一加，HTC，索尼，中兴，360，酷派，联想：整机。
                    <br>（三）附件质保：
                    <br>1. 苹果：整机、保卡、发票；
                    <br>2. 华为，小米，三星，努比亚，一加:整机、附件；
                    <br>3. 魅族，锤子，诺基亚，HTC，索尼，中兴，360，酷派，联想，摩托罗拉，8848，海信，夏普，黑莓，AGM，OPPO，VIVO，金立：保卡、附件。
                    <br>四、制造商故障不包括（三包法）：
                    <br>1. 产品功能正常无性能故障，但因各品牌厂家的产品配件供应商不同，导致的同样配置机型相同条件下的差异的；包括但不限于屏幕显示色差（冷暖屏），颜色差异，电池厂家不同等；
                    <br>2. 使用方法差异造成的问题；包括但不限于：软件问题和系统问题、网络原因、电池耗电速度、发热、手感等问题；(软件导致的非性能故障问题，即为通过软件处理能够排除的问题)；
                    <br>3. 商品外观、网络制式等非性能故障问题进行退换货。
                    <br>五、数据安全：在申请退换货/送修/软件升级前需自行对设备上的重要数据进行备份、解除相关ID密码、退出重要软件。九机可为您提供免费资料备份互导服务。
                    <br>六、取机时效：九机网取机时效为60天：即通知取机日起60天内，未取机的，将视为自动放弃该设备的所有权，同意我司按照无人认领来进行处置。
                    <br>七、退款问题：符合退款商品，九机网会全款退换，包括购机时使用的九机币、积分、优惠码将全部返回（优惠码为新生成，有效使用期7天）。
                    <br>八、优品良品机说明：一手优品和二手良品商品特殊，仅提供退款，不可换货。出现《移动电话机商品性能故障表》所列性能故障的，消费者可以选择修理。
                    <br>九、邮寄商品外观问题：邮寄购买用户需在收件后 ，先对商品外观验收再激活，存在外观瑕疵的须在未激活的24小时内反馈至九机网，超24h未反馈的，将不再就商品外观问题进行保障。
                  </td>
                </tr>
              </table>
            </div>
            <div data-v-2292038c class="params-table-box">
              <div data-v-2292038c class="params-table-header">品牌厂家信息</div>
              <table data-v-2292038c class="normal-table">
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">品牌厂家网站</td>
                  <td data-v-2292038c class="argument-value">
                    <a data-v-2292038c href="https://www.apple.com/cn/">https://www.apple.com/cn/</a>
                  </td>
                </tr>
                <tr data-v-2292038c>
                  <td data-v-2292038c class="argument-key">厂家服务电话</td>
                  <td data-v-2292038c class="argument-value">
                    <a data-v-2292038c href="tel:4006668800">400-666-8800</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- 看看 -->
      <div class="margin-top white-bg padding-top" style="margin-bottom:50px;">
        <div data-v-0db50fbe>
          <div data-v-0db50fbe class="recommend">
            <div data-v-0db50fbe class="title-image">
              <img
                data-v-0db50fbe
                src="https://img2.ch999img.com/newstatic/1383/bba029bbcdd70c.png"
                class="full-width"
              >
            </div>
            <ul data-v-0db50fbe class="flex flex-justify-between flex-wrap">
              <li data-v-0db50fbe>
                <div data-v-0db50fbe class="recommend-item">
                  <a data-v-0db50fbe href="/product/68397.html">
                    <img
                      data-v-0db50fbe
                      src="https://img2.ch999img.com/pic/product/440x440/20190308180608363.jpg"
                    >
                  </a>
                  <p
                    data-v-0db50fbe
                    class="lines-2 mt-5 recommend-name"
                  >Apple iPhone XS Max (A2104) 全网通版金色 64GB</p>
                  <div
                    data-v-0db50fbe
                    class="flex flex-justify-between flex-align-center margin-top"
                  >
                    <span data-v-0db50fbe class="red font-16">￥7899.00</span>
                    <a data-v-0db50fbe href="javascript:"></a>
                  </div>
                </div>
              </li>
              <li data-v-0db50fbe>
                <div data-v-0db50fbe class="recommend-item">
                  <a data-v-0db50fbe href="/product/74082.html">
                    <img
                      data-v-0db50fbe
                      src="https://img2.ch999img.com/pic/product/440x440/20190308180400801.jpg"
                    >
                  </a>
                  <p data-v-0db50fbe class="lines-2 mt-5 recommend-name">小米9 全网通版幻彩蓝 8GB+128GB</p>
                  <div
                    data-v-0db50fbe
                    class="flex flex-justify-between flex-align-center margin-top"
                  >
                    <span data-v-0db50fbe class="red font-16">￥3299.00</span>
                    <a data-v-0db50fbe href="javascript:"></a>
                  </div>
                </div>
              </li>
              <li data-v-0db50fbe>
                <div data-v-0db50fbe class="recommend-item">
                  <a data-v-0db50fbe href="/product/73669.html">
                    <img
                      data-v-0db50fbe
                      src="https://img2.ch999img.com/pic/product/440x440/20190308180430156.jpg"
                    >
                  </a>
                  <p
                    data-v-0db50fbe
                    class="lines-2 mt-5 recommend-name"
                  >三星 Galaxy S10 (SM-G9730) 全网通版碳晶黑 8GB+128GB</p>
                  <div
                    data-v-0db50fbe
                    class="flex flex-justify-between flex-align-center margin-top"
                  >
                    <span data-v-0db50fbe class="red font-16">￥5999.00</span>
                    <a data-v-0db50fbe href="javascript:"></a>
                  </div>
                </div>
              </li>
              <li data-v-0db50fbe>
                <div data-v-0db50fbe class="recommend-item">
                  <a data-v-0db50fbe href="/product/58206.html">
                    <img
                      data-v-0db50fbe
                      src="https://img2.ch999img.com/pic/product/440x440/20190308180328989.jpg"
                    >
                  </a>
                  <p
                    data-v-0db50fbe
                    class="lines-2 mt-5 recommend-name"
                  >Apple iPhone X（A1865） 全网通版银色 64GB</p>
                  <div
                    data-v-0db50fbe
                    class="flex flex-justify-between flex-align-center margin-top"
                  >
                    <span data-v-0db50fbe class="red font-16">￥6099.00</span>
                    <a data-v-0db50fbe href="javascript:"></a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- 购买 -->
    <div class="btns-wrapper">
      <div data-v-1966e491 class="btns-box border-top flex">
        <a
          data-v-1966e491
          href="javascript:;"
          class="btn-small flex flex-col flex-justify-center flex-align-center"
        >
          <i data-v-1966e491 class="small-icon kefu"></i>
          <span data-v-1966e491>客服</span>
        </a>
        <a
          data-v-1966e491
          href="javascript:;"
          class="btn-small flex flex-col flex-justify-center flex-align-center"
        >
          <i data-v-1966e491 class="small-icon star-o"></i>
          <span data-v-1966e491>收藏</span>
        </a>
        <a
          data-v-1966e491
          href="javascript:;"
          class="btn-small flex flex-col flex-justify-center flex-align-center relative border-right"
        >
          <i data-v-1966e491 class="small-icon cart"></i>
          <span data-v-1966e491 @click="goto">购物车</span>
          <span data-v-1966e491 class="cart-number red-bg">4</span>
        </a>
        <a
          data-v-1966e491
          href="javascript:;"
          class="btn-big flex-child-average"
          @click="show"
        >加入购物车</a>
        <a data-v-1966e491 href="javascript:;" class="btn-big flex-child-average red">立即购买</a>
      </div>
    </div>

    <!-- 价格弹窗 -->
    <popup
      :change.sync="showpopup"
      v-show="showpopup"
      :mylist="mylist"
      :mysize="mysize"
      :datalist="datalist"
      :color.sync="color"
      :size.sync="size"
      :relation="relation"
      :gqty.sync="g_qty"
    ></popup>

    <!-- 城市弹窗 -->
    <div data-v-43fd20d1 class="full-screen" style="z-index: 9;" v-show="showcity">
      <div data-v-43fd20d1 class="mask"></div>
      <div data-v-43fd20d1 class="city-child">
        <div data-v-43fd20d1 class="wrapper white-bg full-height">
          <div data-v-43fd20d1 class="city-title flex flex-col flex-center border-bottom">
            <p data-v-43fd20d1 class="font-16">九机网</p>
            <p data-v-43fd20d1 class="grey-9 font-10">选择您当前的城市</p>
            <a data-v-43fd20d1 href="javascript:;" class="close-city" @click="showcity=!showcity">×</a>
          </div>
          <div data-v-43fd20d1>
            <p
              data-v-43fd20d1
              class="hot-city-title font-12 grey-9 grey-f-bg padding-left padding-right"
            >热门城市</p>
            <div
              data-v-43fd20d1
              class="hot-city border-top border-bottom"
              style="padding-bottom: 0px;"
            >
              <div
                data-v-43fd20d1
                class="full-height flex flex-align-center"
                style="min-width: 500px;"
              >
                <a data-v-43fd20d1 href="javascript:;" data-id="530102" class="hot-city-item">昆明</a>
                <a data-v-43fd20d1 href="javascript:;" data-id="500103" class="hot-city-item">重庆</a>
                <a data-v-43fd20d1 href="javascript:;" data-id="532901" class="hot-city-item">大理</a>
                <a data-v-43fd20d1 href="javascript:;" data-id="520102" class="hot-city-item">贵阳</a>
                <a data-v-43fd20d1 href="javascript:;" data-id="430101" class="hot-city-item">长沙</a>
                <a data-v-43fd20d1 href="javascript:;" data-id="510106" class="hot-city-item">成都</a>
                <a data-v-43fd20d1 href="javascript:;" data-id="530302" class="hot-city-item">曲靖</a>
                <a data-v-43fd20d1 href="javascript:;" data-id="532503" class="hot-city-item">蒙自</a>
                <a data-v-43fd20d1 href="javascript:;" data-id="210102" class="hot-city-item">沈阳</a>
                <a data-v-43fd20d1 href="javascript:;" data-id="440304" class="hot-city-item">深圳</a>
              </div>
            </div>
            <p
              data-v-43fd20d1
              class="hot-city-title font-12 grey-9 grey-f-bg padding-left padding-right"
            >选择城市</p>
            <div data-v-43fd20d1 class="city-tab-box">
              <div data-v-43fd20d1 class="city-tab border-bottom flex flex-align-center">
                <a data-v-43fd20d1 href="javascript:;" class="city-tab-item">广东省</a>
                <a data-v-43fd20d1 href="javascript:;" class="city-tab-item">广州市</a>
                <a data-v-43fd20d1 href="javascript:;" class="city-tab-item city-tab-cur">请选择</a>
              </div>
              <div data-v-43fd20d1 class="city-item-box" style="height: 225px;">
                <div data-v-43fd20d1 class="flex flex-wrap">
                  <a
                    data-v-43fd20d1
                    href="javascript:;"
                    data-id="440101"
                    class="city-item flex flex-align-center"
                  >
                    <p data-v-43fd20d1 class="lines-1 font-13">广州市区</p>
                  </a>
                  <a
                    data-v-43fd20d1
                    href="javascript:;"
                    data-id="440103"
                    class="city-item flex flex-align-center"
                  >
                    <p data-v-43fd20d1 class="lines-1 font-13">荔湾区</p>
                  </a>
                  <a
                    data-v-43fd20d1
                    href="javascript:;"
                    data-id="440104"
                    class="city-item flex flex-align-center"
                  >
                    <p data-v-43fd20d1 class="lines-1 font-13">越秀区</p>
                  </a>
                  <a
                    data-v-43fd20d1
                    href="javascript:;"
                    data-id="440105"
                    class="city-item flex flex-align-center"
                  >
                    <p data-v-43fd20d1 class="lines-1 font-13">海珠区</p>
                  </a>
                  <a
                    data-v-43fd20d1
                    href="javascript:;"
                    data-id="440106"
                    class="city-item flex flex-align-center"
                  >
                    <p data-v-43fd20d1 class="lines-1 font-13">天河区</p>
                  </a>
                  <a
                    data-v-43fd20d1
                    href="javascript:;"
                    data-id="440111"
                    class="city-item flex flex-align-center"
                  >
                    <p data-v-43fd20d1 class="lines-1 font-13">白云区</p>
                  </a>
                  <a
                    data-v-43fd20d1
                    href="javascript:;"
                    data-id="440112"
                    class="city-item flex flex-align-center"
                  >
                    <p data-v-43fd20d1 class="lines-1 font-13">黄埔区</p>
                  </a>
                  <a
                    data-v-43fd20d1
                    href="javascript:;"
                    data-id="440113"
                    class="city-item flex flex-align-center"
                  >
                    <p data-v-43fd20d1 class="lines-1 font-13">番禺区</p>
                  </a>
                  <a
                    data-v-43fd20d1
                    href="javascript:;"
                    data-id="440114"
                    class="city-item flex flex-align-center"
                  >
                    <p data-v-43fd20d1 class="lines-1 font-13 grey-9">花都区</p>
                  </a>
                  <a
                    data-v-43fd20d1
                    href="javascript:;"
                    data-id="440115"
                    class="city-item flex flex-align-center"
                  >
                    <p data-v-43fd20d1 class="lines-1 font-13">南沙区</p>
                  </a>
                  <a
                    data-v-43fd20d1
                    href="javascript:;"
                    data-id="440116"
                    class="city-item flex flex-align-center"
                  >
                    <p data-v-43fd20d1 class="lines-1 font-13">萝岗区</p>
                  </a>
                  <a
                    data-v-43fd20d1
                    href="javascript:;"
                    data-id="440183"
                    class="city-item flex flex-align-center"
                  >
                    <p data-v-43fd20d1 class="lines-1 font-13">增城市</p>
                  </a>
                  <a
                    data-v-43fd20d1
                    href="javascript:;"
                    data-id="440184"
                    class="city-item flex flex-align-center"
                  >
                    <p data-v-43fd20d1 class="lines-1 font-13">从化市</p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script type="text/javascript">
import mytop from "../components/top.vue";
import popup from "../components/popup.vue";

import Swiper from "swiper";
import "swiper/dist/css/swiper.min.css";

export default {
  data() {
    return {
      banselect: ["视频", "图片", "局部"],
      se_imgurl: [
        "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAAtCAYAAAA6GuKaAAAAAXNSR0IArs4c6QAAA5VJREFUWAnVmc1PE0EYxt+CscpFYi8tmh4wol6pGA9GvdCYKOBBBa4a03D0BCIXPAAHxYPgVf8AEg7VuxGjEAU/b8bEr0ATJYFAlHpgfJ7ttuy2WLaz23b7Jk/3a96Z30xnZ96ZDYhLU0qFkUUHFIOaLArhfBlatGge58lAIJDCsbIG0CjUD72ANqFSjOnpR/9o2clRSAgah9KQF8Z8mB//FW8NmQahAWgFKocxX+Yf9IQcGYWhl1AljOXwHdE3ZNAKfa8EraUMlteqRQ3HTui3JbNKnrLczv+BB7Z7AAcOXzPQ3u2eV+jeH5RzCsPjQn55BdAAZp96BR3MT1yF6x8osy1/XK+zggCYb+805AdgopFj2uTitWE2aNy5AZ3MPPLNL3nIlbNc90BtOMB/hvblnvrnZBUoh9BNGBaItaVv4dqPwOQkF/kMM1oarcwY4BO0O3Pbl79/QXUYrf0t29K9roBXV0RSS+WuKRuUnLnucVG7xJlnCEgjIgcQlfZ2i3z9op2VA8cMJ7oGY4tSw0u4mJa4rlSdbKlhj1JDg0qtr2VTeHkkZ5jdg9NlbhRxUFt7ko2NwuuREZEjLSKPHoqoTftzd1fk7CA0p2zvbQl9/NpVkRNtIs8ZEXhmxwmNDllGW0DocOa0SPdlr/p7hNBc15XfpqZEjh0VGRoUWV9zU16Te2ilnAOk0yKjo5n+Pjfr3M+e0oDm9F1ZS2ExfnNAt8wQW9qYz3Vz0PZrbtZ1XSb0oq63ll99vUhfn8j9CS138rqHDpQwxLe3i7x5KzLxAGuiBm3oXSTX9Xbs14KJ5s5dkfMXHLsUSWi0NLeqymONjSLj90Q+fPQKmJzzbOkkxHGrhP8ZqYsZ+20iITJ8W2S/p4MTOZN15qJxrhhD0WeRvAk1Hhd59x4v2qTXwMSYzS1yETlxM1DPfv1U6solpc7FlXryWC8P5179JDe6BHxqb+XCJQwqgP/T1zZpcm69fGhtvjG1tRpHLTidj/m0rcdMPgPPNsyhtYO4+xTy04YNw8GzgEaImDEbNG8BPIxD7ezlERo1QtwoXRB3LatpLL/L5LFxMGAqMCTk9moPVC1wlttjchTwFb2BrhKDqvElIFYUbKeH7ONQ7XxzyVYI0LX1dSsLziPga+c7ohXchI+iAgyy2G1K3VJjevppf7EtGKfzAXe6RuEc17m1xpeHcSr3USiGBZxluTKisOUkryHX38b/ASm/YgUgC5Y6AAAAAElFTkSuQmCC",
        "//img2.ch999img.com/m/static/assets/play-btn-bg.556d32dd8ed74af68a44ee79d2397bd3.png"
      ],
      carIndex: 0,
      currentred: 0,
      datalist: {},
      showpopup: false,
      sku: {},
      mylist: [],
      mysize: [],
      color: "",
      size: [],
      currentcolor: 0,
      currentsize: 0,
      relation: {},
      g_qty: 1,
      showcity: false
    };
  },
  components: {
    mytop,
    popup
  },
  methods: {
    goto() {
      this.$router.push({ path: "/cart" });
    },
    show() {
      this.showpopup = true;
    },
    thissize(idx) {
      this.currentsize = idx;
      this.size = this.mysize[idx].value;
    },
    mycolor(idx) {
      this.currentcolor = idx;
      this.color = this.mylist[idx].value;
    },
    handleChange(index) {
      //跳转之后获取当前的下标
      this.carIndex = index; //轮播图当前下标
      // console.log(111)
    },
    switchCar(
      index //自定义跳转，只需要传图片的下标即可
    ) {
      this.currentred = index;
    }
  },
  created() {
    //ajax获取数据
    var { cid } = this.$route.params;
    this.$axios
      .get("http://localhost:5201/goods.php", {
        params: {
          cid: cid,
          m: "init"
        }
      })
      .then(res => {
        // console.log(res);
        let {
          data: { list }
        } = res;
        // console.log(data);
        this.datalist = list[0];

        // console.log(this.datalist)
        // console.log(this.datalist.relation)

        this.datalist.pictures = JSON.parse(this.datalist.pictures);

        this.sku = JSON.parse(this.datalist.sku);
        this.mylist = this.sku[0].list;
        this.mysize = this.sku[1].list;
        // console.log(this.mylist[0])
        this.color = this.mylist[1].value;
        this.size = this.mysize[0].value;

        this.datalist.relation = JSON.parse(this.datalist.relation);
        this.relation = this.datalist.relation;
      });
  }
};
</script>
<style scoped>
.container {
  display: flex;
  background: #efefef;
  flex-direction: column;
}
.container .gcenter {
  flex: 1;
}
.mint-swipe img,
.video {
  height: 349px;
  text-align: center;
}

.play-btn-text {
  border: 1px solid rgb(153, 153, 153);
  border-radius: 12px;
  top: 0px;
  left: 0px;
  color: rgb(51, 51, 51);
  display: block;
  width: 52px;
  text-align: center;
}
.btnUnselected {
  display: none;
}
.play-btn-text.active {
  color: #fff;
  left: 2px;
  border: none;
}
</style>




