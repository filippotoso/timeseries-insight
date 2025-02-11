<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/timeseriesinsights/v1/timeseries_insights.proto

namespace GPBMetadata\Google\Cloud\Timeseriesinsights\V1;

class TimeseriesInsights
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�5
<google/cloud/timeseriesinsights/v1/timeseries_insights.proto"google.cloud.timeseriesinsights.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/duration.protogoogle/protobuf/empty.protogoogle/protobuf/timestamp.protogoogle/rpc/status.proto"^
BigqueryMapping
timestamp_column (	
group_id_column (	
dimension_column (	"b

DataSource
uri (	G

bq_mapping (23.google.cloud.timeseriesinsights.v1.BigqueryMapping"�
DataSet
name (	

data_names (	D
data_sources (2..google.cloud.timeseriesinsights.v1.DataSource@
state (21.google.cloud.timeseriesinsights.v1.DataSet.State"
status (2.google.rpc.Status&
ttl (2.google.protobuf.Duration"z
State
STATE_UNSPECIFIED 
UNKNOWN
PENDING
LOADING

LOADED
	UNLOADING
UNLOADED

FAILED:��A�
)timeseriesinsights.googleapis.com/Dataset%projects/{project}/datasets/{dataset}:projects/{project}/locations/{location}/datasets/{dataset}"{
EventDimension
name (	

string_val (	H 
long_val (H 
bool_val (H 

double_val (H B
value"�
EventF

dimensions (22.google.cloud.timeseriesinsights.v1.EventDimension
group_id (.

event_time (2.google.protobuf.Timestamp"�
AppendEventsRequest9
events (2).google.cloud.timeseriesinsights.v1.EventB
dataset (	B1�A�A+
)timeseriesinsights.googleapis.com/Dataset"Y
AppendEventsResponseA
dropped_events (2).google.cloud.timeseriesinsights.v1.Event"�
CreateDataSetRequestC
parent (	B3�A�A-
+cloudresourcemanager.googleapis.com/ProjectA
dataset (2+.google.cloud.timeseriesinsights.v1.DataSetB�A"W
DeleteDataSetRequest?
name (	B1�A�A+
)timeseriesinsights.googleapis.com/Dataset"�
ListDataSetsRequestC
parent (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project
	page_size (

page_token (	"n
ListDataSetsResponse=
datasets (2+.google.cloud.timeseriesinsights.v1.DataSet
next_page_token (	"R
PinnedDimension
name (	

string_val (	H 
bool_val (H B
value"�
ForecastParams!
noise_threshold (B�AH �X
seasonality_hint
 (29.google.cloud.timeseriesinsights.v1.ForecastParams.PeriodB�A8
horizon_duration (2.google.protobuf.DurationB�A"\\
Period
PERIOD_UNSPECIFIED 

HOURLY	
DAILY

WEEKLY
MONTHLY

YEARLYB
_noise_threshold"Y
TimeseriesPoint(
time (2.google.protobuf.Timestamp
value (H �B
_value"P

TimeseriesB
point (23.google.cloud.timeseriesinsights.v1.TimeseriesPoint"�
EvaluatedSliceG

dimensions (23.google.cloud.timeseriesinsights.v1.PinnedDimension#
detection_point_actual (H �%
detection_point_forecast (H�
expected_deviation (H�
anomaly_score (H�?
history (2..google.cloud.timeseriesinsights.v1.Timeseries@
forecast
 (2..google.cloud.timeseriesinsights.v1.Timeseries"
status (2.google.rpc.StatusB
_detection_point_actualB
_detection_point_forecastB
_expected_deviationB
_anomaly_score"�
SlicingParams
dimension_names (	B�AS
pinned_dimensions (23.google.cloud.timeseriesinsights.v1.PinnedDimensionB�A"�
TimeseriesParams8
forecast_history (2.google.protobuf.DurationB�A3
granularity (2.google.protobuf.DurationB�A
metric (	B�AH �n
metric_aggregation_method (2F.google.cloud.timeseriesinsights.v1.TimeseriesParams.AggregationMethodB�A"M
AggregationMethod"
AGGREGATION_METHOD_UNSPECIFIED 
SUM
AVERAGEB	
_metric"�
QueryDataSetRequest?
name (	B1�A�A+
)timeseriesinsights.googleapis.com/Dataset7
detection_time (2.google.protobuf.TimestampB�A 
num_returned_slices (H �I
slicing_params	 (21.google.cloud.timeseriesinsights.v1.SlicingParamsO
timeseries_params
 (24.google.cloud.timeseriesinsights.v1.TimeseriesParamsK
forecast_params (22.google.cloud.timeseriesinsights.v1.ForecastParams
return_timeseries (B
_num_returned_slices"h
QueryDataSetResponse
name (	B
slices (22.google.cloud.timeseriesinsights.v1.EvaluatedSlice"�
EvaluateSliceRequestB
dataset (	B1�A�A+
)timeseriesinsights.googleapis.com/DatasetS
pinned_dimensions (23.google.cloud.timeseriesinsights.v1.PinnedDimensionB�A7
detection_time (2.google.protobuf.TimestampB�AO
timeseries_params (24.google.cloud.timeseriesinsights.v1.TimeseriesParamsK
forecast_params (22.google.cloud.timeseriesinsights.v1.ForecastParams"�
EvaluateTimeseriesRequestC
parent (	B3�A�A-
+cloudresourcemanager.googleapis.com/ProjectB

timeseries (2..google.cloud.timeseriesinsights.v1.Timeseries.
granularity (2.google.protobuf.DurationK
forecast_params (22.google.cloud.timeseriesinsights.v1.ForecastParams2�
TimeseriesInsightsController�
ListDataSets7.google.cloud.timeseriesinsights.v1.ListDataSetsRequest8.google.cloud.timeseriesinsights.v1.ListDataSetsResponse"a���R,/v1/{parent=projects/*/locations/*}/datasetsZ" /v1/{parent=projects/*}/datasets�Aparent�
CreateDataSet8.google.cloud.timeseriesinsights.v1.CreateDataSetRequest+.google.cloud.timeseriesinsights.v1.DataSet"{���d",/v1/{parent=projects/*/locations/*}/datasets:datasetZ+" /v1/{parent=projects/*}/datasets:dataset�Aparent,dataset�
DeleteDataSet8.google.cloud.timeseriesinsights.v1.DeleteDataSetRequest.google.protobuf.Empty"_���R*,/v1/{name=projects/*/locations/*/datasets/*}Z"* /v1/{name=projects/*/datasets/*}�Aname�
AppendEvents7.google.cloud.timeseriesinsights.v1.AppendEventsRequest8.google.cloud.timeseriesinsights.v1.AppendEventsResponse"����x"</v1/{dataset=projects/*/locations/*/datasets/*}:appendEvents:*Z5"0/v1/{dataset=projects/*/datasets/*}:appendEvents:*�Adataset,events�
QueryDataSet7.google.cloud.timeseriesinsights.v1.QueryDataSetRequest8.google.cloud.timeseriesinsights.v1.QueryDataSetResponse"j���d"2/v1/{name=projects/*/locations/*/datasets/*}:query:*Z+"&/v1/{name=projects/*/datasets/*}:query:*�
EvaluateSlice8.google.cloud.timeseriesinsights.v1.EvaluateSliceRequest2.google.cloud.timeseriesinsights.v1.EvaluatedSlice"����z"=/v1/{dataset=projects/*/locations/*/datasets/*}:evaluateSlice:*Z6"1/v1/{dataset=projects/*/datasets/*}:evaluateSlice:*�
EvaluateTimeseries=.google.cloud.timeseriesinsights.v1.EvaluateTimeseriesRequest2.google.cloud.timeseriesinsights.v1.EvaluatedSlice"����~"?/v1/{parent=projects/*/locations/*}/datasets:evaluateTimeseries:*Z8"3/v1/{parent=projects/*}/datasets:evaluateTimeseries:*U�A!timeseriesinsights.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
&com.google.cloud.timeseriesinsights.v1BTimeseriesInsightsProtoPZTgoogle.golang.org/genproto/googleapis/cloud/timeseriesinsights/v1;timeseriesinsights�bproto3'
        , true);

        static::$is_initialized = true;
    }
}

