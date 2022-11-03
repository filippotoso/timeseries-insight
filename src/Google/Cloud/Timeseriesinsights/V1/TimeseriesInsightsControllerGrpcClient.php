<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2022 Google LLC
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
namespace Google\Cloud\Timeseriesinsights\V1;

/**
 */
class TimeseriesInsightsControllerGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Lists [DataSets][google.cloud.timeseriesinsights.v1.DataSet] under the project.
     *
     * The order of the results is unspecified but deterministic. Newly created
     * [DataSets][google.cloud.timeseriesinsights.v1.DataSet] will not necessarily be added to the end
     * of this list.
     * @param \Google\Cloud\Timeseriesinsights\V1\ListDataSetsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListDataSets(\Google\Cloud\Timeseriesinsights\V1\ListDataSetsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.timeseriesinsights.v1.TimeseriesInsightsController/ListDataSets',
        $argument,
        ['\Google\Cloud\Timeseriesinsights\V1\ListDataSetsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a [DataSet][google.cloud.timeseriesinsights.v1.DataSet] from data stored on Cloud
     * Storage.
     *
     * The data must stay immutable while we process the
     * [DataSet][google.cloud.timeseriesinsights.v1.DataSet] creation; otherwise, undefined outcomes
     * might result.  For more information, see [DataSet][google.cloud.timeseriesinsights.v1.DataSet].
     * @param \Google\Cloud\Timeseriesinsights\V1\CreateDataSetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateDataSet(\Google\Cloud\Timeseriesinsights\V1\CreateDataSetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.timeseriesinsights.v1.TimeseriesInsightsController/CreateDataSet',
        $argument,
        ['\Google\Cloud\Timeseriesinsights\V1\DataSet', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a [DataSet][google.cloud.timeseriesinsights.v1.DataSet] from the system.
     *
     * **NOTE**: If the [DataSet][google.cloud.timeseriesinsights.v1.DataSet] is still being
     * processed, it will be aborted and deleted.
     * @param \Google\Cloud\Timeseriesinsights\V1\DeleteDataSetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteDataSet(\Google\Cloud\Timeseriesinsights\V1\DeleteDataSetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.timeseriesinsights.v1.TimeseriesInsightsController/DeleteDataSet',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Append events to a `LOADED` [DataSet][google.cloud.timeseriesinsights.v1.DataSet].
     * @param \Google\Cloud\Timeseriesinsights\V1\AppendEventsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AppendEvents(\Google\Cloud\Timeseriesinsights\V1\AppendEventsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.timeseriesinsights.v1.TimeseriesInsightsController/AppendEvents',
        $argument,
        ['\Google\Cloud\Timeseriesinsights\V1\AppendEventsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Execute a Timeseries Insights query over a loaded
     * [DataSet][google.cloud.timeseriesinsights.v1.DataSet].
     * @param \Google\Cloud\Timeseriesinsights\V1\QueryDataSetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function QueryDataSet(\Google\Cloud\Timeseriesinsights\V1\QueryDataSetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.timeseriesinsights.v1.TimeseriesInsightsController/QueryDataSet',
        $argument,
        ['\Google\Cloud\Timeseriesinsights\V1\QueryDataSetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Evaluate an explicit slice from a loaded [DataSet][google.cloud.timeseriesinsights.v1.DataSet].
     * @param \Google\Cloud\Timeseriesinsights\V1\EvaluateSliceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function EvaluateSlice(\Google\Cloud\Timeseriesinsights\V1\EvaluateSliceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.timeseriesinsights.v1.TimeseriesInsightsController/EvaluateSlice',
        $argument,
        ['\Google\Cloud\Timeseriesinsights\V1\EvaluatedSlice', 'decode'],
        $metadata, $options);
    }

    /**
     * Evaluate an explicit timeseries.
     * @param \Google\Cloud\Timeseriesinsights\V1\EvaluateTimeseriesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function EvaluateTimeseries(\Google\Cloud\Timeseriesinsights\V1\EvaluateTimeseriesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.timeseriesinsights.v1.TimeseriesInsightsController/EvaluateTimeseries',
        $argument,
        ['\Google\Cloud\Timeseriesinsights\V1\EvaluatedSlice', 'decode'],
        $metadata, $options);
    }

}
