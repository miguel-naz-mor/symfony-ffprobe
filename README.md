# Symfony Ffprobe

---

Project with a small symfony API with a POST endpoint to handle a ffprobe over a file via url.


## Install

```shell
docker build -t symfony/ffmpeg .
```

## Execution

```shell
docker run -it --rm --name ffprobe_symf -p8000:8000 symfony/ffmpeg symfony server:start
```

This will up a web server over localhost:8000 with an endpoint /ffprobe POST

## Ffprobe Endpoint

### Method
`POST`

### Path
`http://127.0.0.1:8000/ffprobe`

### Body

````json
{
   "url": "http://techslides.com/demos/sample-videos/small.mp4"
}
````

### Ouput example

```
O:43:"FFMpeg\FFProbe\DataMapping\StreamCollection":1:{s:52:" FFMpeg\FFProbe\DataMapping\StreamCollection streams";a:2:{i:0;O:33:"FFMpeg\FFProbe\DataMapping\Stream":1:{s:51:" FFMpeg\FFProbe\DataMapping\AbstractData properties";a:35:{s:5:"index";i:0;s:10:"codec_name";s:4:"h264";s:15:"codec_long_name";s:41:"H.264
/ AVC / MPEG-4 AVC / MPEG-4 part 10";s:7:"profile";s:20:"Constrained
Baseline";s:10:"codec_type";s:5:"video";s:16:"codec_tag_string";s:4:"avc1";s:9:"codec_tag";s:10:"0x31637661";s:5:"width";i:560;s:6:"height";i:320;s:11:"coded_width";i:560;s:12:"coded_height";i:320;s:15:"closed_captions";i:0;s:12:"has_b_frames";i:0;s:7:"pix_fmt";s:7:"yuv420p";s:5:"level";i:30;s:11:"color_range";s:2:"tv";s:11:"color_space";s:5:"bt709";s:14:"color_transfer";s:5:"bt709";s:15:"color_primaries";s:5:"bt709";s:15:"chroma_location";s:4:"left";s:4:"refs";i:1;s:6:"is_avc";s:4:"true";s:15:"nal_length_size";s:1:"4";s:12:"r_frame_rate";s:4:"30/1";s:14:"avg_frame_rate";s:4:"30/1";s:9:"time_base";s:7:"1/90000";s:9:"start_pts";i:0;s:10:"start_time";s:8:"0.000000";s:11:"duration_ts";i:498000;s:8:"duration";s:8:"5.533333";s:8:"bit_rate";s:6:"465641";s:19:"bits_per_raw_sample";s:1:"8";s:9:"nb_frames";s:3:"166";s:11:"disposition";a:12:{s:7:"default";i:1;s:3:"dub";i:0;s:8:"original";i:0;s:7:"comment";i:0;s:6:"lyrics";i:0;s:7:"karaoke";i:0;s:6:"forced";i:0;s:16:"hearing_impaired";i:0;s:15:"visual_impaired";i:0;s:13:"clean_effects";i:0;s:12:"attached_pic";i:0;s:16:"timed_thumbnails";i:0;}s:4:"tags";a:4:{s:13:"creation_time";s:27:"2010-03-20T21:29:11.000000Z";s:8:"language";s:3:"und";s:9:"vendor_id";s:12:"[0][0][0][0]";s:7:"encoder";s:14:"JVT/AVC
Coding";}}}i:1;O:33:"FFMpeg\FFProbe\DataMapping\Stream":1:{s:51:" FFMpeg\FFProbe\DataMapping\AbstractData properties";a:23:{s:5:"index";i:1;s:10:"codec_name";s:3:"aac";s:15:"codec_long_name";s:27:"AAC
(Advanced Audio
Coding)";s:7:"profile";s:2:"LC";s:10:"codec_type";s:5:"audio";s:16:"codec_tag_string";s:4:"mp4a";s:9:"codec_tag";s:10:"0x6134706d";s:10:"sample_fmt";s:4:"fltp";s:11:"sample_rate";s:5:"48000";s:8:"channels";i:1;s:14:"channel_layout";s:4:"mono";s:15:"bits_per_sample";i:0;s:12:"r_frame_rate";s:3:"0/0";s:14:"avg_frame_rate";s:3:"0/0";s:9:"time_base";s:7:"1/48000";s:9:"start_pts";i:0;s:10:"start_time";s:8:"0.000000";s:11:"duration_ts";i:267264;s:8:"duration";s:8:"5.568000";s:8:"bit_rate";s:5:"83050";s:9:"nb_frames";s:3:"261";s:11:"disposition";a:12:{s:7:"default";i:1;s:3:"dub";i:0;s:8:"original";i:0;s:7:"comment";i:0;s:6:"lyrics";i:0;s:7:"karaoke";i:0;s:6:"forced";i:0;s:16:"hearing_impaired";i:0;s:15:"visual_impaired";i:0;s:13:"clean_effects";i:0;s:12:"attached_pic";i:0;s:16:"timed_thumbnails";i:0;}s:4:"tags";a:3:{s:13:"creation_time";s:27:"2010-03-20T21:29:11.000000Z";s:8:"language";s:3:"eng";s:9:"vendor_id";s:12:"[0][0][0][0]";}}}}}
```
